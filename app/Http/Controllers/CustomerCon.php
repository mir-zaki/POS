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
        return redirect()->route('customer_manage');
}

}
