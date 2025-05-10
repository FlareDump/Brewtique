<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function welcome(){
        return view('pages.home');
    }

    public function products(){
        return view('pages.products');
    }

    public function signin(){
        return view('pages.signin');
    }

    public function login(){
        return view('pages.login');
    }

}
