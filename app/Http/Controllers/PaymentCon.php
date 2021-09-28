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

        $buys=Purchase::with('supplier')->where('id',$id)->get();

        //dd($buys);
        return view('backend.layout.payment.paysupplier',compact('buys'));

    }

    public function addpay_customer($id){

        $sales=Sale::with('customer')->where('id',$id)->get();
        // dd($sales);
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
            'account_type'=>$request->type,
            'name'=>$request->supplier_name,
            'refer'=>$request->ref,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('paymanage');
    }

    public function payments_customer(Request $request)
    {

        Paymentcustomer::create([
            'payment_date'=>$request->pay_date,
            'account_type'=>$request->type,
            'name'=>$request->customer_id,
            'refer'=>$request->ref,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('paymanage_customer');
    }

    }


