<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('pages.home');
    }
    
    public function signin(){
        return view('pages.signin');
    }

    public function login(){
        return view('pages.login');
    }
    public function promo()
    {
        return view('pages.promo'); 
    }
}
