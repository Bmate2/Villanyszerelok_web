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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description');
            $table->integer('stock');
            $table->decimal('price', 10, 2);
            $table->enum('category', [
                'LEGO City', 
                'LEGO Technic', 
                'LEGO Star Wars', 
                'LEGO Ninjago', 
                'LEGO Friends', 
                'LEGO Creator', 
                'LEGO Super Heroes', 
                'LEGO Art',
                'Other'
            ])->default('Other');
            $table->string('image_url')->nullable();
            $table->integer('sales_count')->default(0);
            $table->integer('rating_count')->default(0)->nullable();
            $table->decimal('rating_avg', 3, 2)->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
