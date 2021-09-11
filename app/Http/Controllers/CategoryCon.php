<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;

class CategoryCon extends Controller
{
    public function categories ()
    {
        $categories=category::all();
        // dd($cat->all());

        return view('backend.layout.category.category',compact('categories'));

    }

    public function categories_details ($id)
    {
        //$categories=category::all();
         //dd($id);
        $product=product::where('category_id',$id)->get();
        //dd($product);
        return view('backend.layout.category.categorydetails',compact('product'));

    }



    public function category_add (Request $addcat)
    {

        //  dd($addcat->all());



category::create([
            'category_name'=>$addcat->category_name,
            'active'=>$addcat->active
        ]);
        return redirect()->back();
    }

    public function categories_delete ($id)
    {

        $categories=category::find($id);
        // dd($customer);
        if ($categories){
            $categories->delete();
            return redirect()->back()->with('message','Category is Deleted');

        }
        return redirect()->back()->with('message','Category is not Deleted');



    }
}
