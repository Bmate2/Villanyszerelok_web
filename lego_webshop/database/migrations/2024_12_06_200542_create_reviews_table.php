<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Hozzáadja a kapcsolatot a products táblával
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ha felhasználókat is kezelsz
            $table->integer('rating'); // Az értékelés (1-5)
            $table->text('review')->nullable(); // A szöveges értékelés
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
