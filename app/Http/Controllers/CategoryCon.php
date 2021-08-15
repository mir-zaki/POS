<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;


class CategoryCon extends Controller
{
    public function categories ()
    {
        $categories=category::all();
        // dd($cat->all());
        
        return view('backend.layout.category.category',compact('categories'));
        
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
}
