<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use Mail;
use App\User;
class RegistrationController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function createUser(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required|min:11|max:14',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20|confirmed',
            'password_confirmation' => 'required|min:5|max:20',
        ]);
        
        $user = Sentinel::register($request->all());
        $activation = Activation::create($user);
        $role = Sentinel::findRoleBySlug('customer');
        $role->users()->attach($user);

        $this->sendEmail($user,$activation->code);

        return redirect()->back()->with(['success' => 'Registration successful. Please check your email to activate your account:)']);
    }
    private function sendEmail($user,$code)
    {
        Mail::send('emails.activation', [
            'user' => $user,
            'code' => $code
        ],function($meassage) use ($user){
            $meassage->to($user->email);
            $meassage->subject("Hello $user->name , Activate your account.");
        });
    }
}
