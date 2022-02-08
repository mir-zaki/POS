<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    use HasFactory;
    public function Customer(){

        return $this->belongsto(Customer::class);

        }
        public function buy_price(){

            return $this->belongsto(PurchaseDetails::class,'product_id','unit_price');

            }
}
