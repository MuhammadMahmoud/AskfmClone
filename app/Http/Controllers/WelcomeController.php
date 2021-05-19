<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;
class WelcomeController extends Controller{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function showlogin()
    {
        # code...
        return view('login');
    }
    public function login(Request $request)
    {
        //return $request;
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password],
        $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('user.homepage'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function showsignup()
    {
        return view('signup');
    }
    public function signup()
    {
        # code...
    }
    public function forgot_password()
    {
        return view('forgot_password');
    }
}
