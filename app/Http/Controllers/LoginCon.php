<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginCon extends Controller
{


    public function log ()
    {
        
        return view('backend.layout.login');
    }


    public function login_user (Request $login)
    {
        
        //  dd($login->all());
        login::create([
            'user'=>$login->user,
            'password'=>$login->password,
            'active'=>$login->active
        ]);

    }
}
