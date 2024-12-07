<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $similarProducts = Product::where('category', $product->category)
                              ->orderBy('sales_count', 'desc')
                              ->where('id', '!=', $product->id)
                              ->get();


        $images = $product->images;

        return view('show', compact('product', 'similarProducts', 'images'));
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

        $existingReview = Review::where('product_id', $productId)
        ->where('user_id', Auth::id())
        ->first();

        if ($existingReview) {
        return redirect()->route('product.show', $productId)
            ->with('error', 'Már értékelted ezt a terméket!');
        }


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