<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table='sales';
    protected $guarded=[];



        public function User()
        {

            return $this->belongsto(User::class,'sale_by','id');
        }

        public function sale()
        {

            return $this->belongsto(Sale::class,'sale_id','id');

            }
        public function customer(){
            return $this->belongsto(Customer::class,'customer_id','id');
        }
}
