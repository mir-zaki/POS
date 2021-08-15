<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_image',
        
        'product_name',
        
        'buy_price',

        'sell_price',

        'qty',
        
        'description',

        'category',

        'availability'
    ];
}
