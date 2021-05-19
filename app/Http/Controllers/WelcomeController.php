<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;
class WelcomeController extends Controller{

    public function showlogin()
    {
        # code...
        return view('login');
    }
    public function login()
    {
        # code...
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
