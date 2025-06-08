<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.home');
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

    public function hotproducts()
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

    public function coldproducts()
    {
        // Get the ProductCategory code for 'Cold Drinks'
        $coldDrinksCategory = \App\Models\ProductCategory::where('CategoryName', 'Cold Drinks')->first();
        $products = collect();
        if ($coldDrinksCategory) {
            $products = \App\Models\Product::with('category')
                ->where('ProdCatCode', $coldDrinksCategory->ProdCatCode)
                ->get();
        }
        return view('pages.cold_products', compact('products'));
    }

    public function allproducts()
    {
        // Get all products from all categories with stock > 0
        $products = \App\Models\Product::with('category')->where('Stock', '>', 0)->get();
        return view('pages.all_products', compact('products'));
    }

    //add to cart POST from product modal
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'ProdCatCode' => 'required|integer',
            'ProdPrice' => 'required|numeric',
            'Size' => 'required|string',
            'MilkCode' => 'required|integer|exists:Milk,MilkCode',
            'AddonCodes' => 'array',
            'AddonCodes.*' => 'integer|exists:Addon,AddonCode',
            'Quantity' => 'required|integer|min:1',
        ]);

        $userId = Auth::id() ?? 1;

        $cart = new Cart();
        $cart->UserID = $userId;
        $cart->ProdCatCode = $validated['ProdCatCode'];
        $cart->ProdPrice = $validated['ProdPrice'];
        $cart->Size = $validated['Size'];
        $cart->MilkCode = $validated['MilkCode'];
        $cart->Quantity = $validated['Quantity'];
        $cart->AddedAt = now();
        // Save only the first addon for now (schema only allows one AddonCode)
        $cart->AddonCode = isset($validated['AddonCodes'][0]) ? $validated['AddonCodes'][0] : null;
        $cart->save();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }
        return redirect()->route('allproducts')->with('success', 'Added to cart!');
    }

    public function adminDashboard()
    {
        $totalProducts = \App\Models\Product::count();
        // Count distinct PurchaseDate values for totalOrders
        $totalOrders = \App\Models\Orders::distinct('PurchaseDate')->count('PurchaseDate');
        $totalUsers = \App\Models\User::count();
        // Calculate total sales: (ProdPrice + CupSizePrice + MilkPrice + AddonPrice) * Quantity for each order
        $totalSales = \App\Models\Orders::all()->sum(function ($order) {
            $base = floatval($order->ProdPrice ?? 0);
            $cup = floatval($order->CupSizePrice ?? 0);
            $milk = floatval($order->MilkPrice ?? 0);
            $addon = floatval($order->AddonPrice ?? 0);
            $qty = intval($order->Quantity ?? 1);
            return ($base + $cup + $milk + $addon) * $qty;
        });
        return view('pages.admin_dashboard', compact('totalProducts', 'totalOrders', 'totalUsers', 'totalSales'));
    }
    public function adminProducts()
    {
        $products = \App\Models\Product::with('category')->get();
        return view('pages.admin_products', compact('products'));
    }
    public function adminOrders()
    {
        $orders = \App\Models\Orders::all();
        return view('pages.admin_orders', compact('orders'));
    }
    public function adminUsers()
    {
        $users = \App\Models\User::all();
        return view('pages.admin_users', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $validated = $request->validate([
            'ProdPrice' => 'required|numeric',
            'Stock' => 'required|integer',
        ]);
        $product->ProdPrice = $validated['ProdPrice'];
        $product->Stock = $validated['Stock'];
        $product->save();
        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }
    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'ProdName' => 'required|string|max:100',
            'ProdCatCode' => 'required|integer|exists:ProductCategory,ProdCatCode',
            'ProdPrice' => 'required|numeric',
            'Stock' => 'required|integer',
            'ImagePath' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        // Handle image upload
        if ($request->hasFile('ImagePath')) {
            $image = $request->file('ImagePath');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('products'), $filename);
            $imagePath = 'products/' . $filename;
        } else {
            $imagePath = null;
        }

        $product = new \App\Models\Product();
        $product->ProdName = $validated['ProdName'];
        $product->ProdCatCode = $validated['ProdCatCode'];
        $product->ProdPrice = $validated['ProdPrice'];
        $product->Stock = $validated['Stock'];
        $product->ImagePath = $imagePath;
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product added successfully!');
    }
    public function deleteProduct($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }
}
