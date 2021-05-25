<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Auth;
use Route;
use Session;
use Hash;
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
    public function show_login()
    {
        # code...
        return view('login');
    }
    public function show_home()
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
            return redirect()->intended(route('user.homepage'));
        }
        if($data->email == $request->email && $data->password == $request->password){
            return redirect()->intended(route('user.homepage'));
        }
        return "Failed";
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function show_signup()
    {
        return view('signup');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
          if($check){
            return redirect()->intended(route('user.showlogin'));
          }
          else{
            return redirect()->back()->withInput($request->only('email', 'name'));
          }
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    public function show_forgot_password()
    {
        return view('forgot_password');
    }
    public function forgot_password()
    {

    }
    public function show_questions()
    {
        # code...
    }
    public function show_profile()
    {
        # code...
    }
    public function show_settings()
    {
        # code...
    }
    public function show_friends()
    {
        # code...
    }
    public function logout()
    {
        # code...
    }
}
