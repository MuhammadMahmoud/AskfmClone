<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Auth::routes();
Route::get('/login','WelcomeController@showlogin')->name('user.showlogin');
Route::post('/login','WelcomeController@login')->name('user.login');
Route::get('/signup','WelcomeController@showsignup')->name('user.showsignup');
Route::post('/signup','WelcomeController@signup')->name('user.signup');
Route::get('/forgot-password','WelcomeController@forgot_password')->name('user.forgotpassword');
Route::get('/homepage','WelcomeController@showhome')->name('user.homepage');


