<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sales_count', 'desc')->take(8)->get();
    
        return view('home', compact('products'));
    }
}

