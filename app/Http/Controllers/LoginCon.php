<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class LoginCon extends Controller
{


    public function log ()
    {

        return view('backend.layout.login');
    }

    public function login_user ( Request $request)
    {

        // dd($request->all());
        $req=$request->except('_token');
        if(Auth::attempt($req)){
            return redirect()->route('dash');
        }
        return redirect()->back()->with('message','Wrong Password Or User Name.........');
    }

    public function logout ()
    {

        Auth::logout();
        return redirect()->route('log');
    }



}
