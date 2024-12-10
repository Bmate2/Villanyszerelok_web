<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show($id)
    {
        $order = Order::with('products')->findOrFail($id);

        $cartData = json_decode($order->cart_data, true);

        return view('orders.show', compact('order', 'cartData')); 
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

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        
        if ($order->user_id !== auth()->id()) {
            return redirect()->route('profile.show')->with('error', 'Nincs jogosultságod törölni ezt a rendelést.');
        }
        
        $order->delete();

        return redirect()->route('profile.show')->with('success', 'Rendelés sikeresen törölve!');
    }
}
