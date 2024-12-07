<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);

        Product::all()->each(function ($product) {
            $averageRating = $product->reviews()->avg('rating'); // Átlagos értékelés
            $ratingCount = $product->reviews()->count(); // Értékelések száma
            
            // Frissítjük a terméket az új értékelésekkel
            $product->update([
                'rating_avg' => $averageRating,
                'rating_count' => $ratingCount,
            ]);
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
