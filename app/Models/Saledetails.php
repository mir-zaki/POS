<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saledetails extends Model
{
    use HasFactory;
    protected $table='saledetails';
    protected $guarded=[];


    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
