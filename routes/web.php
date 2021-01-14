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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});*/

Route::get('/', 'HomeController@showWelcomePage');

Route::get('login', 'HomeController@showLoginForm');
Route::get('logon', 'HomeController@showLogonForm');
Route::get('register', 'HomeController@showRegisterForm');
Route::get('register2', 'HomeController@showRegister2Form');
Route::get('maindashboard', 'HomeController@ShowMainDashboard');
Route::get('lock', 'HomeController@showLockForm');
Route::get('lifebits', 'HomeController@showlifebitsPage');
Route::get('projectpage', 'HomeController@showProjectPage'); 
Route::get('aboutpage', 'HomeController@showAboutPage');
Route::get('pricingpage', 'HomeController@showPricingPage');
Route::get('contactpage', 'HomeController@showContactPage');