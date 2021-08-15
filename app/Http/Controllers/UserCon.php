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
        
        return view('backend.layout.user.manageuser');
    } 

public function useradd (Request $addcus)
{
        
 dd($addcus->all());
        


//  product::create([
//  'product_image'=>$addproduct->product_image,
            
        
            
    //  ]);


}
}