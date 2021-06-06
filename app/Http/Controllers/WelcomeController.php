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



    public function welcome()
    {
        # code...
        return view('welcome');
    }

    public function show_home()
    {
        return view('homepage');
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

    public function show_questions()
    {
        return view('questions');
    }
    public function show_profile()
    {
        return view('profile');
    }
    public function show_settings()
    {
        return view('settings');
    }
    public function show_friends()
    {
        return view('friends');
    }

    public function show_notification()
    {
        return view('notification');
    }
}
