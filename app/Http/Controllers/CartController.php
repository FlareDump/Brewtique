<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

        // Get the authenticated user's ID, or null if not logged in
        $user_id = $request->input('user_id') ?? Auth::id();

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
            'user_id' => $user_id,
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

    public function destroy($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Item not found.'], 404);
        }
    }

    public function checkoutCart(Request $request)
    {
        $userId = Auth::id();
        $cartItems = \App\Models\Cart::where('user_id', $userId)->get();
        if ($cartItems->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Cart is empty.'], 400);
        }
        foreach ($cartItems as $item) {
            // Deduct stock from Product table
            $product = Product::where('ProdName', $item->ProductName)->first();
            if ($product) {
                $product->Stock = max(0, $product->Stock - $item->Quantity);
                $product->save();
            }
            \App\Models\Orders::create([
                'cartID' => $item->cartID,
                'user_id' => $userId,
                'ImagePath' => $item->ImagePath,
                'ProductName' => $item->ProductName,
                'ProdPrice' => $item->ProdPrice,
                'CupSize' => $item->CupSize,
                'CupSizePrice' => $item->CupSizePrice,
                'Milk' => $item->Milk,
                'MilkPrice' => $item->MilkPrice,
                'Addon' => $item->Addon,
                'AddonPrice' => $item->AddonPrice,
                'Quantity' => $item->Quantity,
                'TotalPrice' => $item->TotalPrice,
                'PurchaseDate' => now(),
            ]);
        }
        // Only delete the checked-out user's cart items
        \App\Models\Cart::where('user_id', $userId)->delete();
        return response()->json(['success' => true]);
    }
}
