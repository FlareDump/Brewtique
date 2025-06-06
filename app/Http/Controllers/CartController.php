<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Carbon;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        $validated = $request->validate([
            'ProductName' => 'required|string|max:255',
            'ProductImage' => 'nullable|string|max:255',
            'ProductPrice' => 'required|numeric',
            'CupSize' => 'nullable|string|max:255',
            'CupSizePrice' => 'nullable|numeric',
            'Milk' => 'nullable|string|max:255',
            'MilkPrice' => 'nullable|numeric',
            'Addon' => 'nullable|string|max:255',
            'AddonPrice' => 'nullable|numeric',
            'Quantity' => 'required|integer|min:1',
            'TotalPrice' => 'required|numeric',
            'AddedAt' => 'nullable|string',
        ]);

        // Convert AddedAt to MySQL datetime format if present and not already formatted
        if (!empty($validated['AddedAt'])) {
            try {
                $addedAt = Carbon::parse($validated['AddedAt'])->format('Y-m-d H:i:s');
            } catch (\Exception $e) {
                $addedAt = Carbon::now()->toDateTimeString();
            }
        } else {
            $addedAt = Carbon::now()->toDateTimeString();
        }

        Cart::create([
            'ProductName' => $validated['ProductName'],
            'ImagePath' => $validated['ProductImage'] ?? null,
            'ProdPrice' => $validated['ProductPrice'],
            'CupSize' => $validated['CupSize'] ?? null,
            'CupSizePrice' => $validated['CupSizePrice'] ?? null,
            'Milk' => $validated['Milk'] ?? null,
            'MilkPrice' => $validated['MilkPrice'] ?? null,
            'Addon' => $validated['Addon'] ?? null,
            'AddonPrice' => $validated['AddonPrice'] ?? null,
            'Quantity' => $validated['Quantity'],
            'TotalPrice' => $validated['TotalPrice'],
            'AddedAt' => $addedAt,
        ]);

        return redirect()->route('all.products')->with('success', 'Product added to cart!');
    }
}
