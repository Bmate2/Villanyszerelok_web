<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('admin.dashboard', compact('products'));
    }

    public function productadd(){
        return view('admin.productadd');
    }
}
