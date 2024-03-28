<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Mail;
use Session;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $user = UserAuth::where('email', $request->email)->first();
        $token = Str::random(100);
        $domain = URL::to('/');

        if ($user)
        {
            $user->remember_token = $token;
            $user->save();

            $url = $domain.'/password-reset/'.$token;

            $data['url'] = $url;
            $data['email'] = $request->email;
            $data['title'] = 'Reset Password';

            if (env('MAIL_USERNAME') != null)
            {
                Mail::send('emails.resetPassword', ['data' => $data], function ($message) use ($data){
                    $message->to($data['email'])->subject($data['title']);
                });
            }
            flash()->success('Reset link send','Reset link send successfully');
            return redirect()->back();
        }
        else
        {
            flash()->error('User not found','Your entered user info does not exit.');
            return redirect()->back();
        }
    }

    public function showResetForm($token)
    {
        $user = UserAuth::where('remember_token', $token)->first();
        if ($user)
        {
            return view('front.reset-password.reset-form', compact('user'));
        }
        else
        {
            return view('errors.404');
        }
    }

    public function reset(Request $request)
    {
        // Validation
        $request->validate([
            'token' => 'required',
            'new_password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        // Manually check password confirmation
        if ($request->new_password !== $request->password_confirmation) {
            return redirect()->back()->withErrors(['password_confirmation' => 'The new password confirmation does not match.'])->withInput();
        }

        // Find user by remember_token
        $user = UserAuth::where('remember_token', $request->token)->first();

        // If user not found, return back with error
        if (!$user) {
            return redirect()->back()->withErrors(['token' => 'Invalid token.'])->withInput();
        }

        // Update user's password
        $user->password = bcrypt($request->new_password);
        $user->save();

        Session::put('userAuth_id', $user->id);
        Session::put('userAuth_name', $user->name);

        $user->remember_token = null;
        $user->save();

        flash()->success('Password Change', 'Password change successfully');
        return redirect()->route('userAuth.dashboard');
    }

}
