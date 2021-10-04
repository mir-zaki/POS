<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Sale;
use Illuminate\Http\Request;

class ReportCon extends Controller
{
    public function report_purchase (Request $request)
    {
        // $purchasemanage=Purchase::all();



        if($request->from_date){
            $purchasemanage=Purchase::where('purchase_date',$request->from_date)->orderBy('id','desc')->get();
        }

        else{
            $purchasemanage=Purchase::orderBy('id','desc')->get();
        }

        //dd($purchasemanage->all());

        return view('backend.layout.report.reportpurchase',compact('purchasemanage'));

    }

    public function report_sale(Request $request){
        if($request->from_date){
            $salemanage=Sale::where('sale_date',$request->from_date)->orderBy('id','desc')->get();
        }

        else{
            $salemanage=Sale::orderBy('id','desc')->get();
        }
        return view('backend.layout.report.reportsale',compact('salemanage'));


    }
}
