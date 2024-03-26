<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\UserAuth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 2)->latest()->get();
        return view('admin.order.pending', compact('orders'));
    }
    public function manage()
    {
        $orders = Order::where('status', 1)->latest()->get();
        return view('admin.order.manage', compact('orders'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        $userAuth = UserAuth::find($order->userAuth_id);
        return view('admin.order.detail', compact('order', 'userAuth'));
    }

    public function approvalDetail($id)
    {
        $order = Order::find($id);
        $userAuth = UserAuth::find($order->userAuth_id);
        return view('admin.order.approvalDetail', compact('order', 'userAuth'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $transactions = Transaction::where('order_id', $id)->where('payment_status', 3)->get();
        $orderDetails = OrderDetail::where('order_id', $id)
            ->select('order_details.contest_quantity', 'contests.code', 'orders.userAuth_id', 'contests.draw_date')
            ->join('contests', 'order_details.contest_id', '=', 'contests.id')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->groupBy('order_details.contest_quantity', 'contests.code', 'orders.userAuth_id', 'contests.draw_date')
            ->get();

        if ($order->payment_status == 3) {
            $ticketData = [];

            foreach ($orderDetails as $orderDetail) {
                $quantity = $orderDetail->contest_quantity;
                $contestCode = $orderDetail->code;
                $contestDrawDate = $orderDetail->draw_date;
                $userAuth_id = $orderDetail->userAuth_id;

                for ($i = 1; $i <= $quantity; $i++) {
                    // Create a ticket for each contest code for the specified quantity
                    $ticket = new Ticket();
                    $ticket->ticket_no = rand(1111111, 9999999);
                    $ticket->contest_code = $contestCode;
                    $ticket->userAuth_id = $userAuth_id;
                    $ticket->order_id = $id;
                    $ticket->draw_status = 'Pending';
                    $ticket->save();

                    // Add ticket details to the data array
                    $ticketData[] = [
                        'ticket_no' => $ticket->ticket_no,
                        'contest_code' => $ticket->contest_code,
                        'draw_date' => $contestDrawDate,
                        'userAuth_id' => $ticket->userAuth_id,
                    ];
                }
            }

            $order->payment_status = 1;
            $order->status = 1;
            $order->save();

            foreach ($transactions as $transaction) {
                $transaction->payment_status = 1;
                $transaction->save();
            }

            $user = UserAuth::find($userAuth_id);

            // Pass the ticket data to the email template
            $dataTicket['title'] = 'Lottery Ticket';
            $dataTicket['logo'] = asset('/front/assets/images/logo.png');
            $dataTicket['email'] = $user->email;
            $dataTicket['tickets'] = $ticketData; // Array of ticket details

            Mail::send('emails.lottery', ['data' => $dataTicket], function ($message) use ($dataTicket) {
                $message->to($dataTicket['email'])->subject($dataTicket['title']);
            });

            Alert::success('Order Approved Successfully', '');
        } else {
            Alert::success('Order Already Approved', '');
        }

        return redirect()->route('order.pending');
    }

}
