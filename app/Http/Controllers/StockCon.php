<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\Purchase;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockCon extends Controller
{
    public function stock ()
    {

        $stock=product::all();

        //dd($stock->all());

        return view('backend.layout.stock.stocks',compact('stock'));

    }
}
