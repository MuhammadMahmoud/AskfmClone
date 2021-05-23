<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Auth;
use Route;
use Session;

class WelcomeController extends Controller{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function welcome()
    {
        # code...
        return view('welcome');
    }
    public function showlogin()
    {
        # code...
        return view('login');
    }
    public function showhome()
    {
        return view('homepage');
    }
    public function login(Request $request)
    {
        // $data= DB::table('users')->where("email", $request->email);
        // var_dump( $data['email']);
        //dd($request);

        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        echo $request->email. "</br>";
        echo $request->password . "</br>";
        $data=DB::table('users')->where("email",$request->email)->first();
        echo $data->email. "</br>";
        echo $data->password . "</br>";
        if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password],$request->remember)) {
            // if successful, then redirect to their intended location
            return "Success";
            return redirect()->intended(route('user.homepage'));
        }
        if($data->email == $request->email && $data->password == $request->password){
            return redirect()->intended(route('user.homepage'));
        }
        return "Failed";
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
    public function show_forgot_password()
    {
        return view('forgot_password');
    }
    public function forgot_password()
    {

    }
}
