<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->save();

        return redirect()->route('profile.show')->with('success', 'Értékelés sikeresen frissítve!');
    }


    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('profile.show')->with('success', 'Értékelés sikeresen törölve!');
    }
}
