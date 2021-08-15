<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCon extends Controller
{
   
  


    public function dashboard ()
{
    
    return view('backend.layout.admin.dash');
}



}
