<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Index()
    {
        //phpinfo();
        //echo "Welcome";
        //return view('errors.503');
        return view('homepage');
    }
    
    public function Login()
    {
        return view('login');
    }
}