<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view ('home.home');
    }

    public function about()
    {
        return view ('home.about');
    }

    public function dashboard()
    {
        return view ('home.dashboard');
    }
    
}
