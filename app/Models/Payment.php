<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Supplier(){

        return $this->belongsto(Supplier::class,'supplier_name','id');

        }

        public function customer(){
            return $this->belongsTo(Customer::class,'customer_id','id');
        }

        public function purchase(){
            return $this->belongsTo(Purchase::class);
        }

        public function sale(){
            return $this->belongsTo(Sale::class);
        }
}
