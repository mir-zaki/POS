<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseCon extends Controller
{
    public function purchaseadd ()
    {
        $categories=category::all();
        $supplier=Supplier::all();
        $product=product::all();
        $pur=Purchase::all();
        return view('backend.layout.purchase.addpurchase',compact('categories','supplier','product','pur'));

    }

    public function purchase_add ()
    {
        $pur=Purchase::all();
        // dd($pur->all());

        return view('backend.layout.purchase.managepurchase',compact('pur'));

    }


    public function purchases (Request $purchase)
    {

    //dd($purchase->all());



Purchase::create([
            'purchase_date'=>$purchase->purchase_date,
            'supplier_id'=>$purchase->supplier_name,
            'product_id'=>$purchase->product_name,
            'buy_price'=>$purchase->buy_price,
            'sell_price'=>$purchase->sell_price,
            'qty'=>$purchase->qty,
            // 'category_id'=>$purchase->category,



        ]);
        return redirect()->back();
}
}
