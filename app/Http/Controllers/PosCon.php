<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\product;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\Saledetails;
use Illuminate\Http\Request;

class PosCon extends Controller
{
    public function pos(){


        $customer=Customer::all();
        $product=product::all();
        // dd($customer);
        return view('backend.layout.pos.pos',compact('customer','product'));


    }

    public function manage_sale(){

        $salemanage=Sale::all();

        return view('backend.layout.pos.managesale',compact('salemanage'));


    }


    public function sale_list ($id)
    {


        //dd( $purchase);

        //$purchaseList = PurchaseDetails::where('purchase_id',$purchase->purchase_id)->get();
        $salelist=Saledetails::where('sale_id',$id)->get();


        return view('backend.layout.pos.salelist',compact('salelist'));



    }



    public function pos_post( Request $request){


        $saleid=Sale::create([
            'sale_date'=>$request->sale_date,
            'customer_id'=>$request->customer_name,
            'total_price'=>0,
            'sale_by'=>auth()->user()->id,

        ]);

        $carts=session()->get('cart');



            foreach ($carts as $cart){

            Saledetails::create([
                'sale_id' => $saleid->id,
                'product_id' => $cart['product_id'],
                'qty' => $cart['qty'],
                'sale_price' => $cart['sale_price'],
                'sub_total' => $cart['sale_price'] * $cart['qty'],
            ]);


            $stock=Stock::where('product_id',$cart['product_id'])->first();

//dd($stock);

if($stock)
{
    $stock->update([
        'qty' =>$stock->qty - $cart['qty']
    ]);

}
else
{

    Stock::create([

        'product_id'=>$cart['product_id'],
        'qty'=> $cart['qty'],

    ]);
}

    }
    $request->session()->forget('cart');
            return redirect()->back();
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
                        "sale_price" => $product->sale_price,
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
                        "sale_price" => $product->sale_price,
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


