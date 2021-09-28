<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentcustomer extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Customer(){
        return $this->belongsTo(Customer::class,'name','id');
    }
}
