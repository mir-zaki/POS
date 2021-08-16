<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
class product extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'product_image',
        
    //     'product_name',
        
    //     'buy_price',

    //     'sell_price',

    //     'qty',
        
    //     'description',

    //     'category',

    //     'availability'
    // ];

    protected $guarded=[];

    public function category(){
        
    return $this->belongsto(category::class);

    }
}
