<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerCon extends Controller
{
    public function customers ()
    {


        return view('backend.layout.customer.addcus');

    }

    public function customermanage ()
    {

        $customer=Customer::all();
        // dd($customer->all());

        return view('backend.layout.customer.managecus',compact('customer'));

    }



    public function customeradd (Request $addcustomer)
    {

    //  dd($addcustomer->all());



Customer::create([
            'name'=>$addcustomer->name,
            'email'=>$addcustomer->email,
            'address'=>$addcustomer->address,
            'phone'=>$addcustomer->phone,


        ]);
        return redirect()->route('customer_manage')->with('message','Customer is Added');
}
public function customerdelete ($id)
    {

        $customer=Customer::find($id);
        // dd($customer);
        if ($customer){
            $customer->delete();
            return redirect()->back()->with('message','Customer is Deleted');

        }
        return redirect()->back()->with('message','Customer is not Deleted');



    }

    public function customeredit ($id)

    {

        $customers=Customer::find($id);
        // dd($customers->all());

        return view('backend.layout.customer.editcus',compact('customers'));

    }

    public function customerupdate (Request $request, $id)
    {
        // dd($request->all());

        $customers=Customer::find($id);

        $customers->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,


        ]);

        return redirect()->route('customer_manage')->with('message','Customer Information is Updated');

    }



}
