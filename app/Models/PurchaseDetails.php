<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    protected $table='purchasedetails';
    protected $guarded=[];


    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
