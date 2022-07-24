<?php

namespace App\Http\Controllers;
use App\Models\Addproduct;
use App\Models\Dairy;
use App\Models\Meat;
use App\Models\Other;
use App\Models\Order;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddproductController extends Controller
{
    
    public function pageproduct()
    {
      $products=Pageproduct::all();
      // dd($products);
        if(Auth::id())
        {
        
          $user=auth()->user();
          $count = DB::table("pageadds")->where("email",$user->email)->sum('quantity');
         return view('PageProduct.pageproduct',compact(['products','count']));
        }
        else
        {
          return view('PageProduct.pageproduct',compact(['products']));
        }
    }


    public function pageadd(Request $request,$id)
    {
          
        if(Auth::id())
        {
          $id=$request->idproduct;
          
            $id_product =Addproduct:: select("*")
            ->where('id_product',$id)
            ->exists();
           // dd($id);
            if ( $id_product)
            {
               // dd($request->quantity);
              // $pageadd=new Pageadd;
              //  dd( $pageadd);
               $user=auth()->user();
               //$quantitycart=DB::table("addproducts")->where("email",$user->email)->where("id_product",$id_product)->sum('quantity');
              //dd($quantitycart);
               // $updatequantity =$request->quantity+$quantitycart;
               // dd($updatequantity);
               $cart=Addproduct::where("id_product",$id)->first();
              //dd($cart->quantity);
              $updatequantity =$request->quantity+$cart->quantity;
              //dd($updatequantity);

              //dd( $cart->price);
              $updateprice= $cart->price*$updatequantity;
              $cart->update(['quantity'=>$updatequantity,'totalprice'=> $updateprice]);
              //$cart->update(['quantity'=>$updatequantity]);
              

              
              
              /*$dairyproduct= Dairy::all();
              //dd($dairyproduct);
              $attributes= $dairyproduct->all();
              //dd($dairyproduct);
              $addproduct->price=$attributes['price'];
              dd($addproduct->price);
              
              $addproduct->totalprice=$dairyproduct->price*$quantitycart->updatequantity;*/
               

             return redirect("/user/dairy")->with("message","product updated successfully");
             //  return view('PageProduct.pageproduct',compact(['products','count']));


            }
            else{
          // $input=$request->all();
           //dd( $input);
            $user=auth()->user();
            //dd($user);
            $addproduct=new Addproduct;

            $dairyproduct= Dairy::find($id);
           // dd($pageproduct);
           $addproduct->username=$user->name;
           //dd($addproduc->username);
           $addproduct->email=$user->email;
           //dd($addproduct->email);
           $addproduct->productname= $dairyproduct->productname;
           $addproduct->description= $dairyproduct->description;
           $addproduct->image= $dairyproduct->img_path;
           $addproduct->price=$dairyproduct->price;
           $addproduct->quantity=$request->quantity;
           $addproduct->totalprice=$dairyproduct->price*$request->quantity;
           $addproduct-> id_product= $dairyproduct->id;
           $addproduct->save();
          // dd($pageadd);
        
            return redirect("/user/dairy")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");
        }
      }
        else
        {
            return redirect('login');
        }
        
    }


    public function showcartpage()
    {
      if(Auth::id())
        {
        $user=auth()->user();
        $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
        // dd($count);
        $totalprice = DB::table("addproducts")->where("email",$user->email)->sum('totalprice');
        //dd($totalprice);
        $carts=Addproduct::where("email",$user->email)->get();
       //dd($carts);
       
        
            return view("user.shopping",compact('count','carts','totalprice'));
        }else{
          return redirect("login");
        }
    }


    function delete($id){
        $cart = new Addproduct;
        $cartdel =$cart->findorfail($id);
        $cartdel->delete();
        return redirect("/user/shopping")->with("message","Product deleted successfully");

    }











    //meat
    public function addmeat(Request $request,$id)
    {
     
     
        if(Auth::id())
        {
          $id=$request->idproduct;
          
            $id_product =Addproduct:: select("*")
            ->where('id_product',$id)
            ->exists();
           // dd($id);
            if ( $id_product)
            {
          // $input=$request->all();
           //dd( $input);
            $user=auth()->user();
            //dd($user);
            $cart=Addproduct::where("id_product",$id)->first();
            $updatequantity =$request->quantity+$cart->quantity;
            $updateprice= $cart->price*$updatequantity;
            $cart->update(['quantity'=>$updatequantity,'totalprice'=> $updateprice]);
            return redirect("/user/meat")->with("message","product updated successfully");
            }
            else{
              $user=auth()->user();
            $addprod=new Addproduct;

            $meatproduct= Meat::find($id);
           // dd($pageproduct);
           $addprod->username=$user->name;
           //dd($addproduc->username);
           $addprod->email=$user->email;
           //dd($addproduct->email);
           $addprod->productname= $meatproduct->productname;
           $addprod->description= $meatproduct->description;
           $addprod->image= $meatproduct->img_path;
           $addprod->price=$meatproduct->price;
           $addprod->quantity=$request->quantity;
           $addprod->totalprice=$meatproduct->price*$request->quantity;
           $addprod-> id_product= $meatproduct->id;

           $addprod->save();
          // dd($pageadd);
        
            return redirect("/user/meat")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");
        }
      }
        else
        {
            return redirect('login');
        }
        
    }





    //other
    public function addother(Request $request,$id)
    {
     
     
        if(Auth::id())
        {
          $id=$request->idproduct;
          
            $id_product =Addproduct:: select("*")
            ->where('id_product',$id)
            ->exists();
           // dd($id);
            if ( $id_product)
            {
              $user=auth()->user();
              $cart=Addproduct::where("id_product",$id)->first();
              $updatequantity =$request->quantity+$cart->quantity;
              $updateprice= $cart->price*$updatequantity;
              $cart->update(['quantity'=>$updatequantity,'totalprice'=> $updateprice]);
              return redirect("/user/other")->with("message","product updated successfully");
            }
            else{
          // $input=$request->all();
           //dd( $input);
            //$user=auth()->user();
          // $input=$request->all();
           //dd( $input);
            $user=auth()->user();
            //dd($user);
            $addpro= new Addproduct;

            $otherproduct= Other::find($id);
            //dd($otherproduct);
            
           // dd($pageproduct);
           $addpro->username=$user->name;
           //dd($addproduc->username);
           $addpro->email=$user->email;
           //dd($addproduct->email);
           
           $addpro->productname= $otherproduct->productname;
           $addpro->description= $otherproduct->description;
           $addpro->image= $otherproduct->img_path;
           $addpro->price=$otherproduct->price;
           $addpro->quantity=$request->quantity;
           $addpro->totalprice=$otherproduct->price*$request->quantity;
           $addpro-> id_product= $otherproduct->id;
           $addpro->save();
          // dd($pageadd);
        
            return redirect("/user/other")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");
        }
      }
        else
        {
            return redirect('login');
        }
        
    }




    function  confirmorderproduct(Request $request){
      
     
      $addproduct=Addproduct::all();
      if ($addproduct->isNotEmpty())
     {
      //
      $attributes= $request->all();
      // dd($attributes);
         $user=auth()->user();
         $name=$user->name;  
         $email=$user->email;  
         $phone=$user->phone;
         $address=$user->address;                                                              
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
     foreach($data as $key => $value) {
        // dd($key);
       //  dd($value);
         $propertiesData[] = [
             'username'=>$name,
             'email'=>$email,
             'phone'=>$phone,
             'address'=>$address,
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
 Order::insert($propertiesData);
  
         DB::table('addproducts')->where("email",$user->email)->delete();
         /*$total= DB::table('addproducts')->where("email",$user->email)->sum('totalprice');
         dd($total);
        if($total = 0){
          return redirect("/user/shopping")->with("message","the basket is empty");
        }else{*/
         // return redirect("/user/shopping")->with("message","product ordered successfully");
        //}
        return view("user.success");
     }else
       {
        return redirect("/user/shopping");
       }
 
     }
     
}

