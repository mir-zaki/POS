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



    public function poscart(Request $request)
    {
        //$product=product::all();


        $product = product::find($request->product_name);



        if(!$product) {


            abort(404);

        }


        $cart = session()->get('cart');


        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $product->id  => [
                        'product_id' => $product->id,
                        "product_name" => $product->product_name,
                        "sell_price" => $product->sell_price,
                        "qty" => $request->qty
                    ]

            ];

            session()->put('cart', $cart);

            //dd($cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$product->id])) {

            $cart[$product->id]['qty']= $cart[$product->id]['qty']+$request->qty;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$product->id] = [
                        'product_id' => $product->id,
                        "product_name" => $product->product_name,
                        "sell_price" => $product->sell_price,
                        "qty" => $request->qty
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function pos_forget (Request $request)
    {
        if(session()->has('cart'))
        {
            $request->session()->forget('cart');
            return redirect()->back();
        }

return redirect()->back();

    }



}


