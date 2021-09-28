<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{


    use HasFactory;
    protected $table='purchase';
    protected $guarded=[];

    public function Supplier(){

        return $this->belongsto(Supplier::class,'supplier_id','id');

        }
        public function User()
        {

            return $this->belongsto(User::class,'received_by','id');

            }

            public function Purchase()
            {

                return $this->belongsto(Purchase::class,'purchase_id','id');

                }

                


}
