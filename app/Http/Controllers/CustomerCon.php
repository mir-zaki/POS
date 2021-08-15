<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerCon extends Controller
{
    public function customers ()
    {
        // $categories=category::all();
        // dd($cat->all());
        
        return view('backend.layout.customer.addcus');
        
    } 

    public function customermanage ()
    {
        // $categories=category::all();
        // dd($cat->all());
        
        return view('backend.layout.customer.managecus');
        
    }

}
