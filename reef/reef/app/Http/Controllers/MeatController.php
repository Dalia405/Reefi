<?php

namespace App\Http\Controllers;

use App\Models\Meat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $meat = Meat::all();
        if(Auth::id())
        {
        
          $user=auth()->user();
          $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
          return view("user.meat",compact(['meat','count']));
        }else
        {
            return view("user.meat",compact(['meat']));
        }
        //return view("user.meat",["data"=>$meat]);
    }
    
      
   
        
        
         
    public function index()
    {
        $meat = Meat::all();
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view("admin.meat.meat",["data"=>$meat]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
             return view("admin.meat.meat",["data"=>$meat]);
        }*/

       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view('admin.meat.create');
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.meat.create');
        }*/
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            /*'price'=>'required|numeric',
            'img_path'=>'required'*/
            'price' => 'required|integer|min:0',
            //'img_path' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        Meat::create($request->all());
        return redirect("/admin/meat");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function show(Meat $meat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function edit(Meat $meat)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view('admin.meat.edit',["data"=>$meat]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.meat.edit',["data"=>$meat]);
        }*/
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meat $meat)
    {
        $request->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            //'price'=>'required|numeric',
            'price' => 'required|integer|min:0',
            //'img_path' => 'required|'mimes:jpg,bmp,png.jpeg'
            //'img_path'=>'required'|'mimes:jpg,bmp,png.jpeg'
            //'img_path'=> 'mimes:jpeg,jpg,png,gif|max:1000'
            //'img_path' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);
        $meat->update($request->all());
        return redirect("/admin/meat");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meat  $meat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meat $meat)
    {
        $meat->delete();
        return redirect("/admin/meat");
    }
    
}
