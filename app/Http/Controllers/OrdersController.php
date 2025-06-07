<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{

   // Store a new order
   public function store(Request $request)
   {
      $validated = $request->validate([
         'cartID' => 'required|integer',
         'ImagePath' => 'nullable|string|max:255',
         'ProductName' => 'nullable|string|max:255',
         'ProdPrice' => 'nullable|numeric',
         'CupSize' => 'nullable|string|max:255',
         'CupSizePrice' => 'nullable|numeric',
         'Milk' => 'nullable|string|max:255',
         'MilkPrice' => 'nullable|numeric',
         'Addon' => 'nullable|string|max:255',
         'AddonPrice' => 'nullable|numeric',
         'Quantity' => 'nullable|integer',
         'TotalPrice' => 'nullable|numeric',
         'PurchaseDate' => 'nullable|date',
      ]);
      $order = Orders::create($validated);
      return response()->json(['success' => true, 'order' => $order]);
   }

   // Delete an order
   public function destroy($id)
   {
      $order = Orders::find($id);
      if ($order) {
         $order->delete();
         return response()->json(['success' => true]);
      } else {
         return response()->json(['success' => false, 'message' => 'Order not found.'], 404);
      }
   }
}
