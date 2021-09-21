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



    public function products (Request  $addproduct)
    {
        
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

public function product_delete ($id)
    {

        $products=product::find($id);
        // dd($customer);
        if ($products){
            $products->delete();
            return redirect()->back()->with('message','Product is Deleted');

        }
        return redirect()->back()->with('message','Product is not Deleted');



    }

    public function product_edit ($id)

    {

        $product=product::find($id);
        $products=category::all();
        // dd($customers->all());

        return view('backend.layout.product.editproduct',compact('product','products'));

    }

    public function product_update (Request $request, $id)
    {
        // dd($request->all());

        $product=product::find($id);

        $product->update([
            'product_image'=>$request->product_image,
            'product_name'=>$request->product_name,
            'sell_price'=>$request->sell_price,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'availability'=>$request->availability,


        ]);

        return redirect()->route('products')->with('message','Product Information is Updated');

    }

}
