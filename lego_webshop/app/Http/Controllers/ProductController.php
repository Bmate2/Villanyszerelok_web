<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }

    public function productadd(Request $request): RedirectResponse{

        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255'],
            'stock' => ['numeric'],
            'price' => ['numeric'],
            'image_url' => ['string', 'max:255'],
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        event(new ProductAdded($product));
    }
    public function addReview(Request $request, $productId)
    {

        $product = Product::findOrFail($productId);

        $validated = $request->validate([
            'rating' => 'required|integer|between:1,5', 
            'review' => 'nullable|string|max:1000', 
        ]);

        $review = new Review();
        $review->rating = $validated['rating'];
        $review->review = $validated['review'];
        $review->product_id = $product->id;
        $review->user_id = auth()->id();
        $review->save();


        $product->rating_count = $product->reviews()->count();
        $product->rating_avg = $product->reviews()->avg('rating');
        $product->save();

        return redirect()->route('product.show', $productId)->with('success', 'Értékelés sikeresen hozzáadva!');
    }
}