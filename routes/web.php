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


Route::get('/','WelcomeController@welcome')->name('user.welcome');

Auth::routes();
Route::get('/login','Auth\AuthController@show_login')->name('user.showlogin');
Route::post('/login','Auth\AuthController@login')->name('user.login');
Route::get('/signup','Auth\AuthController@show_signup')->name('user.showsignup');
Route::post('/signup','Auth\AuthController@signup')->name('user.signup');
Route::get('/forgot-password','Auth\AuthController@show_forgot_password')->name('user.showforgotpassword');
Route::post('/forgot-password','Auth\AuthController@forgot_password')->name('user.forgotpassword');
Route::get('/homepage','WelcomeController@show_home')->name('user.homepage');
Route::get('/questions','WelcomeController@show_questions')->name('user.questions');
Route::get('/profile','WelcomeController@show_profile')->name('user.profile');
Route::get('/friends','WelcomeController@show_friends')->name('user.friends');
Route::get('/settings','WelcomeController@show_settings')->name('user.settings');
Route::get('/notification','WelcomeController@show_notification')->name('user.notification');
Route::get('/logout','Auth\AuthController@logout')->name('user.logout');




