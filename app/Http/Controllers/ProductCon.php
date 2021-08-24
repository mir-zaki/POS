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
        $products=product::with("category")->paginate(5);
        // dd($products->all());
        return view('backend.layout.product.products',compact('products'));
    }



    public function products (Request $addproduct)
    {

    //   dd($addproduct->all());



product::create([
            'product_image'=>$addproduct->product_image,
            'product_name'=>$addproduct->product_name,
            'sell_price'=>$addproduct->sell_price,
            'description'=>$addproduct->description,
            'category_id'=>$addproduct->category,
            'availability'=>$addproduct->availability,


        ]);
        return redirect()->route('products');
}
}
