<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Transaction;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Cart;
use Mail;
use function Symfony\Component\Uid\Factory\randomBased;

class CheckoutController extends Controller
{
    public function index()
    {
//        $total = Session::get('grand_total');
//        dd($total);
        $user = UserAuth::find(Session::get('userAuth_id'));
        return view('front.checkout.checkout', compact('user'));
    }

    public function newOrder(Request $request)
    {
        if (Session::get('userAuth_id'))
        {
            $user = UserAuth::find(Session::get('userAuth_id'));
        }
        else
        {
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'email' => 'unique:user_auths,email'
            ]);
            $user = new UserAuth();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = bcrypt($request->mobile);
            $user->save();

            Session::put('userAuth_id', $user->id);
            Session::put('userAuth_name', $user->name);

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = $request->mobile;
            $data['title'] = 'Register Mail';

//            Mail::send('emails.registerMail', ['data' => $data], function ($message) use ($data){
//                $message->to($data['email'])->subject($data['title']);
//            });
        }

        $order = new Order();
        $order->userAuth_id = $user->id;
        $order->total_price = Session::get('grand_total');
        $order->order_date = date('Y-m-d');
        $order->payment_status = 2;
        $order->order_code = rand(111111,999999);;
        $order->save();

        $cartContests = Cart::getContent();
        foreach ($cartContests as $cartContest)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->contest_id = $cartContest->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->contest_name = $cartContest->name;
            $orderDetail->contest_price = $cartContest->price;
            $orderDetail->contest_quantity = $cartContest->quantity;
            $orderDetail->save();
        }
        foreach ($cartContests as $cartContest)
        {
            Cart::remove($cartContest->id);
        }
        $dataOrder['name'] = $user->name;
        $dataOrder['email'] = $user->email;
        $dataOrder['code'] = $order->order_code;
        $dataOrder['total'] = Session::get('grand_total');
        $dataOrder['date'] = date('Y-m-d');
        $dataOrder['payment_status'] = $order->payment_status;
        $dataOrder['title'] = 'Order Confirmation';

//        Mail::send('emails.orderConfirm', ['data' => $dataOrder], function ($message) use ($dataOrder){
//            $message->to($dataOrder['email'])->subject($dataOrder['title']);
//        });

        return redirect()->route('confirm.order', ['id' => $order->id]);
    }

    public function confirmOrder($id)
    {
        $order = Order::find($id);
        if ($order->payment_status == 2)
        {
            return view('front.order.confirm', compact('order'));
        }
        else
        {
            Alert::error('Payment Already Submit');
            return redirect()->route('order.history');
        }
    }

    public function makePayment(Request $request)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $word = '';

        for ($i = 0; $i < 10; $i++) {
            $randCharacter = $characters[rand(0, strlen($characters) - 1)];
            $word .= $randCharacter;
        }
//        return $request->all();
        $order = Order::find($request->order_id);
        $user = UserAuth::find(Session::get('userAuth_id'));
        $order_details = OrderDetail::where('order_id', $request->order_id)->get();
        $quantity = OrderDetail::where('order_id', $request->order_id)->sum('contest_quantity');
        foreach ($order_details as $order_detail)
        {
            $transaction = new Transaction();
            $transaction->contest_id = $order_detail->contest_id;
            $transaction->order_id = $request->order_id;
            $transaction->contest_price = $order_detail->contest_price;
            $transaction->userAuth_id = Session::get('userAuth_id');
            $transaction->payment_method = $request->payment_method;
            $transaction->payment_amount = $order_detail->contest_price * $order_detail->contest_quantity;
            $transaction->payment_status = 3;
            $transaction->transaction_no = $request->transaction_no;
            $transaction->save();
        }
        $order->payment_status = 3;
        $order->status = 2;
        $order->payment_method = $request->payment_method;
        $order->payment_number = $request->transaction_no;
        $order->payment_amount = $request->amount;
        $order->qty = $quantity;
        $order->transaction_id = $word;
        $order->save();

        $dataPayment['name'] = $user->name;
        $dataPayment['email'] = $user->email;
        $dataPayment['code'] = $order->order_code;
        $dataPayment['tr_id'] = $order->transaction_id;
        $dataPayment['total'] = $order->payment_amount;
        $dataPayment['date'] = date('Y-m-d');
        $dataPayment['payment_method'] = $request->payment_method;
        $dataPayment['transaction_no'] = $request->transaction_no;
        $dataPayment['payment_status'] = $order->payment_status;
        $dataPayment['title'] = 'Payment Submit';

        Mail::send('emails.payment', ['data' => $dataPayment], function ($message) use ($dataPayment){
            $message->to($dataPayment['email'])->subject($dataPayment['title']);
        });

        return redirect()->route('order.history')->with('message', 'Payment Submit Successfully');
    }
}
