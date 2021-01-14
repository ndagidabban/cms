<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function showWelcomePage() 
    {
        return view('welcome');
    }
    

    public function showLoginForm()
    {
        return view('login');
    }
    public  function showMainDashboard()
    {
        return view('main-dashboard');
    }
    public function showRegisterForm()
    {
        return view ('register');
    }
    public function showLockForm()
    {
        return view ('lock');
    }
    public function showRegister2Form()
    {
        return view ('register2');
    }
    public function showProjectPage()
    {
        return view  ('projectpage');
    }
    public function showAboutPage()
    {
        return view ('aboutpage');
    }
    public function showPricingPage()
    {
        return view ('pricingpage');
    }
    public function showContactPage()
    {
    return view ('contactpage');
    }
}