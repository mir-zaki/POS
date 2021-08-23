<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class StockCon extends Controller
{
    public function stock ()
    {
        $pur=Purchase::all();
        // dd($cat->all());

        return view('backend.layout.purchase.managepurchase',compact('pur'));

    }
}
