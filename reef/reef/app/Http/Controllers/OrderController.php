<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function show()
    {
        if(Auth::id()){
            $user=auth()->user();
            if($user->type=='admin'){
            /*$orders=Order::where("email",$user->email)->get();
            //dd($orders);*/
            $orders = Order::all();
            
                return view("admin.orders.orders",['data'=>$orders]);
             }else{
                 return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
            }
        }else{
            return redirect('login');
        }
        
        
        
        
    }
    public function edit($id){
        $order = new Order;
        $order = $order->findorfail($id);
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view("admin.orders.edit",["data"=>$order]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
       /* if($user->type=='admin'){
            return view("admin.orders.edit",["data"=>$order]);
        }*/
        
    }
    public function update(Request $request,$id)
    {
        /*$request->validate([
            'status' => 'required|max:255',
        ]);*/
        $order = new Order;
        $order = $order->findorfail($id);
        //dd($order);
       // $order->status=request("status");
        //dd($order->status);
        $order->status='Delivered';
        //dd($order->status);
        $order->save();
        return redirect("/admin/orders/orders");
    }
    function delete($id){
        $order= new Order;
        $order =$order->findorfail($id);
        $order->delete();
        //dd($order->delete());
        return redirect("/admin/orders/orders");

    }
}
