<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function signin()
    {
        return view('pages.signin');
    }

    public function login()
    {
        return view('pages.login');
    }
    public function userDashboard()
    {
        return view('pages.user_dashboard');
    }

    public function orderHistory()
    {
        return view('pages.order_history');
    }

    public function mybag()
    {
        return view('pages.mybag');
    }

    public function notification()
    {
        return view('pages.notifications');
    }

    public function voucher()
    {
        return view('pages.vouchers');
    }


    public function splashscreen()
    {
        return view('pages.splashscreen');
    }
}
