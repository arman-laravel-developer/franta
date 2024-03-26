<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Session;
use Alert;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = UserAuth::find(Session::get('userAuth_id'));
        return view('front.user.personal', compact('user'));
    }

    public function update(Request $request)
    {
        $user  = UserAuth::find(Session::get('userAuth_id'));
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('message', 'Personal Info Updated');
    }

    public function updatePass(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'min:6'
        ]);
        $user  = UserAuth::find(Session::get('userAuth_id'));
        if (password_verify($request->old_password, $user->password))
        {
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json([
                'status' => 200,
                'messageSuc' => 'Password Updated'
            ]);
        }
        else
        {
            return response()->json([
                'status' => 200,
                'messageInco' => 'Old Password is incorrect!'
            ]);
        }
    }

    public function dashboard()
    {
        $user = UserAuth::find(Session::get('userAuth_id'));
        $tickets = Ticket::where('userAuth_id', Session::get('userAuth_id'))->where('draw_status', 'Pending')->latest()->get();
        $tickets_draw = Ticket::where('userAuth_id', Session::get('userAuth_id'))->whereNotIn('draw_status', ['Pending'])->latest()->take(10)->get();
        return view('front.user.dashboard', compact('user', 'tickets', 'tickets_draw'));
    }

    public function transaction()
    {
        $user = UserAuth::find(Session::get('userAuth_id'));
        $transactions = Transaction::where('userAuth_id', $user->id)->latest()->get();
        return view('front.user.transaction', compact('user', 'transactions'));
    }
    public function orderHistory()
    {
        $user = UserAuth::find(Session::get('userAuth_id'));
        $orders = Order::where('userAuth_id', Session::get('userAuth_id'))->latest()->paginate(6);
        return view('front.user.history', compact('user', 'orders'));
    }
}
