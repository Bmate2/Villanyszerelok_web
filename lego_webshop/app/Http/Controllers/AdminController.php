<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Exception;

class AdminController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('admin.dashboard', compact('products'));
    }

    public function create(){
        return view('admin.productadd');
    }

    public function store(Request $request): RedirectResponse{
        try{
            $product = Product::where('name', $request->name)->first();

            $request->validate([
                'name' => ['required', 'string', 'max:100'],
                'description' => ['required', 'string', 'max:255'],
                'quantity' => ['integer', 'min:1'],
                'price' => ['numeric'],
                'image_url' => ['string', 'max:255', 'nullable'],
                'category' => ['string', 'max:255', 'nullable'],
            ]);
    
            if (!$product) {
                if(is_null($request->category)){
                    $request->category = 'Other';
                }
                Product::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->quantity,
                    'image_url' => $request->image_url,
                    'category' => $request->category,
                ]);

                return redirect()->route('admin.product.add')->with('success', 'Termék sikeresen hozzáadva!');
            }else{
                return redirect()->route('admin.product.add')->with('warning', 'Már létezik ilyen termék!');
            }
        }
        catch(Exception $e){
            return redirect()->route('admin.product.add')->with('warning', 'Termék hozzáadása nem sikerült!');
        }
        
    }

    public function update(Request $request, $id){
        try{
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:100'],
                'description' => ['required', 'string', 'max:255'],
                'stock' => ['integer', 'min:1'],
                'price' => ['numeric', 'min:1'],
                'image_url' => ['string', 'max:255', 'nullable'],
                'category' => ['string', 'max:255', 'nullable'],
            ]);
    
            $product = Product::findOrFail($id);
    
            $product->name = $validated['name'];
            $product->description = $validated['description'];
            $product->stock = $validated['stock'];
            $product->price = $validated['price'];
            $product->image_url = $validated['image_url'];
            $product->category = $validated['category'];
    
    
            $product->save();
    
            return redirect()->back()->with('success', 'Termék módosítása sikeres!');
        }
        catch(Exception $e){
            return redirect()->back()->with('warning', 'Termék módosítása sikertelen!');
        }
    }

    public function delete(Request $request, $id){
        try{    
            $product = Product::findOrFail($id);
    
            $product->delete();
    
            return redirect()->back()->with('success', 'Termék törlése sikeres!');
        }
        catch (ModelNotFoundException $e) {
            return redirect()->back()->with('warning', 'A termék nem található.');
        }
        catch(Exception $e){
            return redirect()->back()->with('warning', 'Termék törlése sikertelen!');
        }
    }
}
