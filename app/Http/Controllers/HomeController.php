<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Index()
    {
        //phpinfo();
        //echo "Welcome";
        return view('errors.503');
    }
}