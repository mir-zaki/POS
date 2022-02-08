<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Paymentcustomer;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PaymentCon extends Controller
{
    public function addpay_supplier($id){

        $buys=Purchase::with('supplier')->where('id',$id)->first();



        return view('backend.layout.payment.paysupplier',compact('buys'));

    }

    public function addpay_customer($id){

        $sales=Sale::with('customer')->where('id',$id)->get();
        //dd($sales);
        return view('backend.layout.payment.paycustomer',compact('sales'));

    }

    public function paymanage(){

        $pay=Payment::all();

        return view('backend.layout.payment.managepayment',compact('pay'));

    }

    public function paymanage_customer(){

        $pay=Paymentcustomer::all();


        return view('backend.layout.payment.managepaycustomer',compact('pay'));

    }

    public function payments_supplier(Request $request)
    {

        Payment::create([
            'payment_date'=>$request->pay_date,
            'name'=>$request->supplier_name,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'refer'=>$request->ref,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('paymanage');
    }

    public function payments_customer(Request $request)
    {

        $saleid=Paymentcustomer::create([
            'sale_id'=>$request->sale_id,
            'payment_date'=>$request->pay_date,
            'customer_id'=>$request->customer_id,
            'refer'=>$request->ref,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'due'=>$request->amount-$request->pay,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('sale_list',$saleid->sale_id);
    }

    }


