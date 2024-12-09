<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Termék neve
            $table->text('description')->nullable(); // Leírás
            $table->decimal('price', 8, 2); // Ár
            $table->integer('stock'); // Készlet
            $table->timestamps(); // Létrehozási és módosítási időbélyegek
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
