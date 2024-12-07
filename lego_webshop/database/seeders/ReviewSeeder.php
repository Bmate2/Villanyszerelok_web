<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Product;
use App\Models\User;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Review::truncate();

        $products = Product::all();
        $users = User::all();

        foreach ($products as $product) {
            foreach ($users->random(rand(5, 20)) as $user) {
                Review::create([
                    'product_id' => $product->id,
                    'user_id' => $user->id,
                    'rating' => rand(1, 5),
                    'review' => 'Ez egy vélemény ' . $product->name . ' termékről.',
                ]);
            }
        }
    }
}
