<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\product;
use Illuminate\Http\Request;

class PosCon extends Controller
{
    public function pos(){
        $customer=Customer::all();
        $product=product::all();
        // dd($customer);
        return view('backend.layout.pos.pos',compact('customer','product'));

    }
}
