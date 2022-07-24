<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    // display products searchname
 public function searchname(Request $request)
 {
     if(Auth::id()){
        $user=auth()->user();

        $query=$request->input('query');
        // dd($query);
    
        $data=Order::where('username','like',"%$query%")->orwhere('email','like',"%$query%")->get();
        //dd( $carts);
       
       
         /*$user=auth()->user();
         $count = DB::table("orders")->where("email",$user->email)->sum('quantity');*/
         //$totalprice= DB::table('orderproducts')->where("email",$user->email)->sum('totalprice');
         if($user->type=='admin'){
            return view("admin/orders/searchorders",compact('data','query'));
         }else{
            return redirect("/user/index")->with("message","sorry you dont have permisssion to access this page");
         }
     }else{
        return redirect('login');
     }
}
function searchdeletename(Request $request,$id){
    //dd($request);
    $query=$request->input('query');
    //dd($query);
    $cart = new Order;
    $cartdel =$cart->findorfail($id);
    //dd($cartdel);
    $cartdel->delete();
   
   
    return redirect("/searchname?query=$query")->with("message","cart delete successfully");
  
  }
  public function update(Request $request,$id)
    {
        /*$request->validate([
            'status' => 'required|max:255',
        ]);*/
        $query=$request->input('query');
        $cart = new Order;
        $cart = $cart->findorfail($id);
        //dd($order);
       // $order->status=request("status");
        //dd($order->status);
        $cart->status='Delivered';
        //dd($order->status);
        $cart->save();
        return redirect("/searchname?query=$query")->with("message","cart delete successfully");
    }
}
