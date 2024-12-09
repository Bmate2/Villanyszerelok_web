<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{

    public function index()
    {
        $cart = session()->get('cart', []);
        $totalPrice = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('checkout', compact('cart', 'totalPrice'));
    }


    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        $totalPrice = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));


        $order = Order::create([
            'cart_data' => json_encode($cart),
            'total_price' => $totalPrice,      
            'status' => 'pending',         
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
            'shipping_address' => $request->input('shipping_address'),
            'billing_address' => $request->input('billing_address') ?? $request->input('shipping_address'),
            'payment_method' => $request->input('payment_method')
        ]);


        session()->forget('cart');


        return redirect()->route('order.success', ['order' => $order->id]);
    }
}
