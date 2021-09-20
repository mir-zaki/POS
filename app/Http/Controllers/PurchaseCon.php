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
        $purchasemanage=Purchase::all();
        // dd($pur->all());

        return view('backend.layout.purchase.managepurchase',compact('purchasemanage'));

    }

    public function purchase_details ()
    {



        return view('backend.layout.purchase.purchasedetails');

    }


public function addToCart(Request $request)
    {


        $product = product::find($request->product_name);

        if(!$product) {


            abort(404);

        }
        //dd($purchase->all());

        $cart = session()->get('cart');


        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $product->id => [
                        "product_name" => $product->product_name,
                        "buy_price" => $request->buy_price,
                        "qty" => $request->qty
                    ]
            ];

            session()->put('cart', $cart);



            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$product->id])) {

            $cart[$product->id]['buy_price']=$request->buy_price;
            $cart[$product->id]['qty']= $cart[$product->id]['qty']+$request->qty;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$product->id] = [
                        "product_name" => $product->product_name,
                        "buy_price" => $request->buy_price,
                        "qty" => $request->qty
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



}
