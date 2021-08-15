<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierCon extends Controller
{
    public function supplier ()
    {
        // $categories=category::all();
        // dd($cat->all());
        
        return view('backend.layout.supplier.addsupp');
        
    } 

    public function suppliermanage ()
    {
        // $categories=category::all();
        // dd($cat->all());
        
        return view('backend.layout.supplier.managesupp');
        
    }

}
