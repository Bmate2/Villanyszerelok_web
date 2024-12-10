<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show($id)
{
    // Lekérjük a rendelést az azonosító alapján, és a kapcsolódó termékekkel
    $order = Order::with('products')->findOrFail($id);

    // A cart_data JSON dekódolása
    $cartData = json_decode($order->cart_data, true);

    // Visszaadjuk a rendelést és a cart_data-t a nézetnek
    return view('orders.show', compact('order', 'cartData')); // Az order és cartData átadása
}
    public function store(Request $request, $cart, $totalPrice, $validatedData)
    {

        $order = Order::create([
            'customer_name' => $validatedData['customer_name'],
            'customer_email' => $validatedData['customer_email'],
            'customer_phone' => $validatedData['customer_phone'],
            'shipping_address' => $validatedData['shipping_address'],
            'billing_address' => $validatedData['billing_address'] ?? $validatedData['shipping_address'],
            'cart_data' => json_encode($cart),
            'total_price' => $totalPrice,
            'status' => 'pending',
            'payment_method' => $validatedData['payment_method'],
            'user_id' => Auth::id(), 
        ]);

        session()->forget(['cart', 'totalPrice']);


        return redirect()->route('order.success', ['order' => $order->id]);
    }

    public function success(Request $request)
    {

        $order = Order::find($request->order);
        return view('order.success', compact('order'));
    }
}
