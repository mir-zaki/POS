<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
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
        $supplier=Supplier::all();
        // dd($supplier->all());
        
         return view('backend.layout.supplier.managesupp',compact('supplier'));
        
    }


    public function supplieradd (Request $addsupplier)
    {
        
    //    dd($addsupplier->all());
        


Supplier::create([
            'supplier_name'=>$addsupplier->supplier_name,
            'phone'=>$addsupplier->phone,
            'address'=>$addsupplier->address,
            'email'=>$addsupplier->email,
            
        
            
        ]);
        return redirect()->route('supplier_manage');
}

}
