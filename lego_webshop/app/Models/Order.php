<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class); // Feltételezve, hogy az Order és a Product modellek között hasMany kapcsolat van
    }

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'shipping_address',
        'billing_address',
        'cart_data',
        'total_price',
        'status',
        'payment_method',
        'user_id'
    ];


    protected $casts = [
        'cart_data' => 'array',  
    ];


    protected $attributes = [
        'status' => 'pending',
    ];
}
