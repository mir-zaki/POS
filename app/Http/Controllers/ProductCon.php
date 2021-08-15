<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class ProductCon extends Controller
{
    public function productadd ()
    {
        $product=category::all();
        return view('backend.layout.product.addproduct',compact('product'));
    }


    public function product_add ()
    {
        $products=product::paginate(5);
        // dd($products->all());
        return view('backend.layout.product.products',compact('products'));
    }



    public function products (Request $addproduct)
    {
        
    //    dd($addproduct->all());
        


product::create([
            'product_image'=>$addproduct->product_image,
            'product_name'=>$addproduct->product_name,
            'buy_price'=>$addproduct->buy_price,
            'sell_price'=>$addproduct->sell_price,
            'qty'=>$addproduct->qty,
            'description'=>$addproduct->description,
            'category'=>$addproduct->category,
            'availability'=>$addproduct->availability,
        
            
        ]);
        return redirect()->route('products');
}
}