<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentCon extends Controller
{
    public function addpay(){


        return view('backend.layout.payment.addpayment');

    }

    public function paymanage(){


        return view('backend.layout.payment.managepayment');

    }
}
