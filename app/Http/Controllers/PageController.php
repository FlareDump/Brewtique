<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Milk;
use App\Models\Addon;
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
        // Get the ProductCategory code for 'Hot Drinks'
        $hotDrinksCategory = \App\Models\ProductCategory::where('CategoryName', 'Hot Drinks')->first();
        $products = collect();
        if ($hotDrinksCategory) {
            $products = \App\Models\Product::with('category')
                ->where('ProdCatCode', $hotDrinksCategory->ProdCatCode)
                ->get();
        }
        return view('pages.hot_products', compact('products'));
    }

    public function showProductModal()
    {
        $milks = Milk::all(); // get all milk types with name and price
        return view('product_modal', compact('milks'));
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

    /**
     * Return available product options (milks, addons) as JSON.
     */
    public function getProductOptions()
    {
        $milks = Milk::all(['MilkCode', 'MilkName', 'MilkPrice']);
        $addons = Addon::all(['AddonCode', 'AddonName', 'AddonPrice']);
        return response()->json([
            'milks' => $milks,
            'addons' => $addons,
        ]);
    }
}
