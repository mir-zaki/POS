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
public function supplierdelete ($id)
    {

        $supplier=Supplier::find($id);
        // dd($customer);
        if ($supplier){
            $supplier->delete();
            return redirect()->back()->with('message','Customer is Deleted');

        }
        return redirect()->back()->with('message','Customer is not Deleted');



    }

    public function supplieredit ($id)

    {

        $supplier=Supplier::find($id);
        // dd($customers->all());

        return view('backend.layout.supplier.editsupp',compact('supplier'));

    }

    public function supplierupdate (Request $request, $id)
    {
        // dd($request->all());

        $supplier=Supplier::find($id);

        $supplier->update([
            'supplier_name'=>$request->supplier_name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,


        ]);

        return redirect()->route('supplier_manage')->with('message','Supplier Information is Updated');

    }

}
