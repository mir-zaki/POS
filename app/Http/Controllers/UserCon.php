<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserCon extends Controller
{
    public function user ()
    {

        return view('backend.layout.user.adduser');
    }

    public function usermanage ()
    {
        $adduser=User::all();

        return view('backend.layout.user.manageuser',compact('adduser'));
    }

public function useradd (Request $adduser)
{

//  dd($adduser->all());



 User::create([
    'type'=>$adduser->type,
    'username'=>$adduser->username,
    'fullname'=>$adduser->fullname,
    'password'=>bcrypt($adduser->password),
    'phone'=>$adduser->phone,



]);
return redirect()->route('usermanage');


}
}
