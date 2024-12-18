<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image_url',
        'description',
        'stock',
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
