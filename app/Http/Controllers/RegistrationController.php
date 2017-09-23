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
        
        $user = Sentinel::registerAndActivate($request->all());
        $activation = Activation::create($user);
        $role = Sentinel::findRoleBySlug('manager');
        $role->users()->attach($user);

        return redirect()->back()->with(['success' => 'Registration successful.']);
    }
    public function changePassword(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:5|max:20|confirmed',
            'password_confirmation' => 'required|min:5|max:20',
        ]);
        $id = Sentinel::getUser()->id;
        $user = Sentinel::findById($id);
        
        // Setup new password.
        $updatedData = ['password' => $request['password']];
        // Update user.
        Sentinel::update($user, $updatedData);

        Sentinel::logout(null,true);
        return back();
    }
    // private function sendEmail($user,$code)
    // {
    //     Mail::send('emails.activation', [
    //         'user' => $user,
    //         'code' => $code
    //     ],function($meassage) use ($user){
    //         $meassage->to($user->email);
    //         $meassage->subject("Hello $user->name , Activate your account.");
    //     });
    // }
}
