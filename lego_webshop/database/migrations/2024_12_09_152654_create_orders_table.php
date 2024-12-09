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
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('customer_name');   
        $table->string('customer_email');     
        $table->string('customer_phone')->nullable(); 
        $table->text('shipping_address');       
        $table->text('billing_address')->nullable(); 
        $table->string('payment_method');
        $table->json('cart_data');
        $table->decimal('total_price', 10, 2); 
        $table->string('status')->default('pending');
        $table->timestamps(); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
