<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pageproduct;
use App\Models\Pageadd;
use App\Models\Orderproduct;

class SearchProductController extends Controller
{
    // display products search
    public function searchproduct(Request $request)
    {
        
 
        if(Auth::id())
      {
       
          
        $query=$request->input('query');
       // dd($query);
   
       $products=Pageproduct::where('productname','like',"%$query%")->orwhere('description','like',"%$query%")->get();
      // dd( $products);
   
      
        $user=auth()->user();
        $count = DB::table("pageadds")->where("email",$user->email)->sum('quantity');
  
         return view("pageproduct.searchproduct",compact('products','count','query'));
        
    
  
      }
      else
      {
        return view('PageProduct.searchproduct',compact(['products']));

      }
    
     
    }


 // display products searchname
 public function searchname(Request $request)
 {
          
     $query=$request->input('query');
    // dd($query);

    $carts=Pageadd::where('productname','like',"%$query%")->get();
   // dd( $products);
   
   
     $user=auth()->user();
     $count = DB::table("pageadds")->where("email",$user->email)->sum('quantity');
     $totalprice= DB::table('orderproducts')->where("email",$user->email)->sum('totalprice');

      return view("pageproduct.searchname",compact('carts','count','query','totalprice'));
  
 }

 function searchdeletename(Request $request,$id){
  $query=$request->input('query');
  dd($query);
  $cart = new Pageadd;
  $cartdel =$cart->findorfail($id);
  $cartdel->delete();
 
 
  return redirect("/searchname?query=$query")->with("message","cart delete successfully");

}



    public function addsearchproduct(Request $request,$id)
    {
        // dd($request);
    
   // dd($request->idproduct);
  
   if(Auth::id())
   {

       $id=$request->idproduct;
       $id_product =Pageadd:: select("*")
       ->where('id_product',$id)
       ->exists(); 
       
    //  dd( $id_product);
      
       if ( $id_product)
       {
          // dd($request->quantity);
         // $pageadd=new Pageadd;
         //  dd( $pageadd);
          $user=auth()->user();
          $quantitycart=DB::table("pageadds")->where("email",$user->email)->where("id_product",$id_product)->sum('quantity');
         dd($quantitycart);
           $updatequantity =$request->quantity+$quantitycart;
           dd($updatequantity);
          $cart=Pageadd::where("id_product",$id)->first();
         dd($cart);
         $cart->update(['quantity'=>$updatequantity]);
          // $pageadd->quantity= $updatequantity;
          // $pageadd->save();
           //dd($pageadd->quantity);
         //  $pageadd->quantity->update();
         // $pageadd->update();


        // dd($request->all());
       // DB::table("pageadds")->where("email",$user->email)->where("id",$request->idproduct)->update(['quantity'=> $updatequantity]);
         // $pageadd->save();
         // $count = DB::table("pageadds")->where("email",$user->email)->sum('quantity')+$request->quantity;
       
         // $products=Pageproduct::all();
       //  $roleID =$updatequantity; // Editor role ID
      
        // $pageadd->pageadds()->attach($pageadd->quantity);

       // $data=['message'=>'product updated successfully','products'=>$products,'count'=> $count];
        
       //return Redirect::route('PageproductController.pageproduct')->with(['data' => $data]);

       $query=$request->input('query');
      // dd($query);
        return redirect("/searchproduct?query= $query")->with("message","product updated successfully");
        //  return view('PageProduct.pageproduct',compact(['products','count']));


       }
       else{

       
       /*
       $pageadd=new Pageadd;
      // dd( $pageadd);
       $id_product=$pageadd->id;
      //  dd($request->idproduct==$id);
       $pageadd=Pageadd::find( $id_product);
      //dd($pageadd);
       if($request->idproduct!=$id_product)
       {
          // dd($request->idproduct);
       */
    // $input=$request->all();
     // dd( $input);
       $user=auth()->user();
      //dd( $user);
       $pageadd=new Pageadd;

      $pageproduct=Pageproduct::find($id);
      //dd($pageproduct);
      $pageadd->username=$user->name;
     // dd($pageadd->username);
      $pageadd->email=$user->email;
      $pageadd->productname= $pageproduct->productname;
      $pageadd->description= $pageproduct->description;
      $pageadd->image= $pageproduct->image;
      $pageadd->price=$pageproduct->price;
      $pageadd->quantity=$request->quantity;
      $pageadd->totalprice=$pageproduct->price*$request->quantity;
      $pageadd-> id_product= $pageproduct->id;
      $pageadd->save();
   //  dd($pageadd);
 //  dd( $pageadd->findorfail($request->idproduct));
 /*  dd(DB::table("pageadds")
   ->select('id_product'))
  -> where( function (Builder $query) {
       return $query->where("email",auth()->user()->email)
                    ->or->where("id_product", $pageadd-> id_product);
   })
   ->get();
  */
           $query=$request->input('query');
          // dd($query);
            return redirect("/searchproduct?query= $query")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");

       }
   }
     
       
   

   else
   {
       return redirect('login');
   }
   
}


     //show cart
     public function searchshowcart(Request $request)
     {
        // dd($request);
        $query=$request->input('query');
      //  dd($query);
        if(Auth::id())
        {
            $user=auth()->user();
            $count = DB::table("pageadds")->where("email",$user->email)->sum('quantity');
            // dd($count);
            $totalprice = DB::table("pageadds")->where("email",$user->email)->sum('totalprice');
            //dd($totalprice);
            $carts=pageadd::where("email",$user->email)->get();
           //dd($carts);
            
            return view("PageProduct.addsearchproduct",compact('count','carts','totalprice','query'));
        }
        else{
           
            $query=$request->input('query');
            // dd($query);
            return redirect("/searchproduct")->with("message","sorry you dont access this page whithout you have account on this website");
        }
       
     }
 
 
     // delete cart
     function searchdeletecart($id){
         $cart = new Pageadd;
         $cartdel =$cart->findorfail($id);
         $cartdel->delete();
         return redirect("/searchshowcart")->with("message","cart delete successfully");
 
     }
 
     function  confirmorderproduct(Request $request)
     {
      $pageadd=pageadd::all();
      //dd( $pageadd);
      if ($pageadd->isNotEmpty())
      {
       
         //
         $attributes= $request->all();
         // dd($attributes);
            $user=auth()->user();
            $name=$user->name;  
            $email=$user->email;                                                                
        $productname = $attributes['productname'];
       //  dd($productname);
        $description = $attributes['description'];
        $quantity = $attributes['quantity'];
        //dd( $quantity );
        $image = $attributes['image'];
        $price = $attributes['price'];
        $data = array_combine($productname ,$description); 
      
       
        $propertiesData = [];
        $i = 0;
        foreach($data as $key => $value) 
        {
           // dd($key);
          //  dd($value);
            $propertiesData[] = [
                'username'=>$name,
                'email'=>$email,
                'productname' => $key,
                'description' => $value,
                'quantity' => $quantity[$i] ? : null,
                'image' => $image[$i] ? : null,
                'price' => $price[$i] ? : null,
                'totalprice' =>$quantity[$i] * $price[$i] ? : null,
                'status'=>"Not Deliverd"
                ];
            $i++;
         }
    Orderproduct::insert($propertiesData);
     
            DB::table('pageadds')->where("email",$user->email)->delete();
            $totalprice= DB::table('orderproducts')->where("email",$user->email)->sum('totalprice');
          // dd($total);
           return redirect("/searchshowcart")->with("message","product ordered successfully",['total'=>$totalprice] );
    
        }
        else
        {
         return redirect("/searchshowcart");
        }
    
 
     }


     
    
}
