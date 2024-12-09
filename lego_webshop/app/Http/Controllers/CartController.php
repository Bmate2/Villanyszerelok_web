<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show()
    {
        $cart = session()->get('cart', []);
        
        $totalCount = 0;
        foreach ($cart as $item) {
            $totalCount += $item['quantity'];
        }

        return view('cart.index', compact('cart', 'totalCount'));
    }

    public function add(Request $request)
{
    $product = [
        'id' => $request->product_id,
        'name' => $request->product_name,
        'price' => $request->product_price,
        'quantity' => $request->quantity,
    ];

    $cart = session()->get('cart', []);
    
    $cart = collect($cart); 


    $existingProductIndex = $cart->search(function ($item) use ($product) {
        return $item['id'] == $product['id'];
    });

    if ($existingProductIndex !== false) {

        $cart = $cart->transform(function ($item) use ($product) {
            if ($item['id'] == $product['id']) {
                $item['quantity'] += $product['quantity'];
            }
            return $item;
        });
    } else {

        $cart->push($product);
    }


    session()->put('cart', $cart->toArray());

    $totalCount = 0;
    foreach ($cart as $item) {
        $totalCount += $item['quantity']; 
    }


    session()->put('totalCount', $totalCount);


    return redirect()->route('cart.show');
}

public function update($product_id, $action)
    {
        $cart = session()->get('cart', []);

        // Keresés a kosárban
        foreach ($cart as &$item) {
            if ($item['id'] == $product_id) {
                if ($action == 'increase') {
                    $item['quantity']++;
                } elseif ($action == 'decrease' && $item['quantity'] > 1) {
                    $item['quantity']--;
                }
                break;
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.show');
    }


    public function remove($product_id)
    {
        $cart = session()->get('cart', []);


        $cart = array_filter($cart, function ($item) use ($product_id) {
            return $item['id'] != $product_id;
        });

        session()->put('cart', array_values($cart));

        return redirect()->route('cart.show');
    }
    public function clear()
    {
        session()->forget('cart');

        return redirect()->route('cart.show');
    }
}
