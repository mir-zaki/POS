<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardCon extends Controller
{




    public function dashboard ()
{
    $user=User::all()->count();
    $customer=Customer::all()->count();
    $supplier=Supplier::all()->count();
    $product=product::all()->count();
    $purchase=Purchase::all()->count();
    $sale=Sale::all()->count();
    $sale_value=Sale::sum('total_price');
    $purchase_value =Purchase::sum('total_price');
    $revenue = $sale_value - $purchase_value;
    return view('backend.layout.admin.dash',compact('user','customer','supplier','product','purchase','sale','sale_value','purchase_value','revenue'));
}



}
