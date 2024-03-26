<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\UserAuth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Mail;

class UserAuthController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'unique:user_auths,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $user = new UserAuth();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = bcrypt($request->password);
        $user->agree = $request->agree;
        $user->save();

        Session::put('userAuth_id', $user->id);
        Session::put('userAuth_name', $user->name);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['title'] = 'Register Mail';

        Mail::send('emails.registerMail', ['data' => $data], function ($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });
        return redirect()->route('userAuth.dashboard');
    }

    public function checkEmailUnique(Request $request)
    {
        $email = $request->input('email');
        $isUnique = UserAuth::where('email', $email)->count() === 0;

        return new JsonResponse([
            'isUnique' => $isUnique,
            'message' => $isUnique ? '' : 'The email has already been taken.',
        ]);
    }

    public function loginCheck(Request $request)
    {
        $user = UserAuth::where('email', $request->email)->first();
        if ($user)
        {
            if (password_verify($request->password, $user->password))
            {
                Session::put('userAuth_id', $user->id);
                Session::put('userAuth_name', $user->name);

                return redirect()->route('userAuth.dashboard');
            }
            else
            {
                Alert::error('Email/Password Does not match');
                return redirect()->back();
            }
        }
        else
        {
            Alert::error('Email/Password Does not match');
            return redirect()->back();
        }
    }

    public function logOut()
    {
        Session::forget('userAuth_id');
        Session::forget('userAuth_name');

        return redirect()->route('home');
    }

    public function uploadImage(Request $request)
    {
        $user = UserAuth::find($request->userAuth_id);
        if ($request->file('image'))
        {
            if (file_exists($user->image))
            {
                unlink($user->image);
            }
            $slug = Str::slug($user->name);
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'front/user-images/';
            $image->move($directory, $imageName);
            $imageUrl = $directory.$imageName;

            $user->image = $imageUrl;
            $user->save();
            return redirect()->back();

        }
    }

    public function userOnAdmin()
    {
        $users = UserAuth::latest()->get();
        return view('admin.home.manage', compact('users'));
    }

    public function edit($id)
    {
        $user = UserAuth::find($id);
        return view('admin.home.customer-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = UserAuth::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        if ($request->password)
        {
            $user->password = bcrypt($request->password);
        }
        if ($request->file('image'))
        {
            if (file_exists($user->image))
            {
                unlink($user->image);
            }
            $slug = Str::slug($user->name);
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $directory = 'front/user-images/';
            $image->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
            $user->image = $imageUrl;
        }
        $user->save();
        Alert::success('User Update Successfully');
        return redirect()->back();

    }

    public function manage($id)
    {
        $user = UserAuth::find($id);
        Session::put('userAuth_id', $id);
        Session::put('userAuth_name', $user->name);

        return redirect()->route('userAuth.dashboard');
    }

}
