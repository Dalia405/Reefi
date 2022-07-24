<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reef;
use App\Models\User;
use App\Models\Cart;

use App\Models\Order;

class ReefController extends Controller
{


     //middleware
    



    public function index()
    {
      $data=Reef::all();
      // dd($data);
     
      $cart=new Cart;
      
      // $count=cart::where("name",$user->name)->count();
      // $count=cart::where("name",$user->name)->count();
    // $count=cart::count();
    if(Auth::id())
        {
        
          $user=auth()->user();
     $count = DB::table("carts")->where("name",$user->name)->sum('quantity');
     return view('reef.reef',compact(['data', 'count']));
        }
        else
        {
          return view('reef.reef',compact('data'));
        }
    // print_r($data);
      //dd($count) ;


      //  $count=10;
       // return view('reef.reef',compact('data','count'));
       //return view('finalproject.reefproduct',compact(['data', 'count']));
      
       // return view('reef.reef',["data"=>$data]);
    }

    public function addcart(Request $request,$id)
    {
     
    //dd($request);
   // dd($request->quantity);
        if(Auth::id())
        {
          // $input=$request->all();
           //dd( $input);
            //هملى جدول فيها بيانت user and product بتاع كارت
            $user=auth()->user();
            $cart=new Cart;
            $reefproduct=Reef::find($id); //شايل بيانات row كله
           // dd(  $reefproduct);
           //ماريهان
          //query product id from database
          //if product not= null then product.Quantity +=request.quantity
          //else create new product with request data then save it database

            $cart->name=$user->name;
            $cart->product_title=$reefproduct->title;
            $cart->description=$reefproduct->description;
            $cart->image=$reefproduct->image;
           // $cart->quantity=$reefproduct->quantity;
          
           $cart->quantity=$request->quantity;
          //dd($cart->id);
         //  dd( $cart->quantity);
           //dd($request->quantity);
          // dd($reefproduct->quantity);
            $cart->price=$reefproduct->price;
            $cart->save();

         // dd($cart);
        
            return redirect("/reef")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function showcart()
    {
        $user=auth()->user();


        $count = DB::table("carts")->where("name",$user->name)->sum('quantity');
       // dd($count);
        $price = DB::table("carts")->where("name",$user->name)->sum('price');
      // dd($price);
      $total= $count * $price;
     //dd($total);
        $carts=cart::where('name', 'like', '%' . $user->name. '%')->get();


        //$cart=cart::where("name",$user->name);
      //dd($carts);
        
        return view("reef.showcart",compact('count','carts','total'));
    }


    function delete($id){
        $cart = new Cart;
        $cartdel =$cart->findorfail($id);
        $cartdel->delete();
        return redirect("/showcart")->with("message","cart delet successfully");

    }

     //$req=request()->all();
        //dd($req);
      

    function update($id){

      $cart = new Cart;
     $cart=$cart->findorfail($id);
      $cart->quantity=request('quantity');
      $cart->save();
      return redirect("/showcart")->with("message","cart updated successfully");

  }




    function  confirmorder(Request $request){
     
    // dd($request);
      
     //
     $attributes= $request->all();
      // dd($attributes);
        $user=auth()->user();
        $name=$user->name;                                                                
        $phone=$user->phone;
        $address=$user->address;
     
       $reef = new Reef;
      
      
       
       $order = new Order;
       
    $producttitle = $attributes['producttitle'];
    $description = $attributes['description'];
    $quantity = $attributes['quantity'];
    //dd( $quantity );
    $image = $attributes['image'];
    $price = $attributes['price'];
    $data = array_combine($producttitle ,$description); 
  
   
    $propertiesData = [];
    $i = 0;
    foreach($data as $key => $value) {
        $propertiesData[] = [
            'name'=>$name,
            'product_title' => $key,
            'description' => $value,
            'quantity' => $quantity[$i] ? : null,
            'image' => $image[$i] ? : null,
            'price' => $price[$i] ? : null,
            'status'=>"Not Deliverd"
            ];
        $i++;
     }
Order::insert($propertiesData);
  //عايزة امسح صف ده اللي رقم تليفونه او الايميل ده
        DB::table('carts')->where('name', 'like', '%' . $name. '%')->delete();
        if($request->submit == "Save")
        {
          $count = DB::table("orders")->where("name",$user->name)->sum('quantity');
          $price = DB::table("orders")->where("name",$user->name)->sum('price');
          $total= $count * $price;
          dd($total);
        }
        else 
        {
        
          $count = DB::table("carts")->where("name",$user->name)->sum('quantity');
          $price = DB::table("carts")->where("name",$user->name)->sum('price');
        //  dd($price);
        $total= $count * $price;
      //  dd($total);
        }
       
       return redirect("/showcart")->with("message","product ordered successfully",['total' =>$total]);

       /*
      foreach($request->except('token') as $key=>$value)
      {
       
        $order->name=$name;
        $order->phone=$phone;
        $order->address= $address;
/*
        $order->product_title=$reef->product_title;
        $order->image= $reef->image;
        $order->quantity=$reef->quantity;
        $order->price=$reef->price;
        $order->status="Not Deliverd";

        $order->product_title=$request->producttitle[$key];
       // dd($producttitle[$key]);//m
        $order->image=$request->image[$key];
        //dd($image[$key]);
        $order->quantity=$request->quantity[$key];
       // dd($producttitle[$key]);
        $order->price=$request->price[$key];
       // dd($price[$key]);
        $order->status="Not Deliverd";
        
        $order->save();
       // dd( $order);
      
        }
    

        //عايزة امسح صف ده اللي رقم تليفونه او الايميل ده
       // DB::table('carts')->where('name', 'like', '%' . $name. '%')->delete();
       
        return redirect("/showcart")->with("message","product ordered successfully");

*/

    }


}
