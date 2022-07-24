<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    //
   
    public function product($id)
    {
       $prod= User::find($id)->product;
        return $prod; 
    }


    public function user($id)
    {
       $user= Product::find($id)->user;
       $count=$user->count();
        return $user; 
    }
}
