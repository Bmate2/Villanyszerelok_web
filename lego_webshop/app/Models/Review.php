<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Kapcsolat a Product modellel
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}