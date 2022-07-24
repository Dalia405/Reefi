<?php

namespace App\Http\Controllers;

use App\Models\Other;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $other = Other::all();
        if(Auth::id())
        {
        
          $user=auth()->user();
          $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
          //dd($count);
          return view("user.other",compact(['other','count']));
        }
        else
        {
            return view("user.other",compact(['other']));
        }
       // return view("user.other",["data"=>$other]);
    }


    public function index()
    {
        $other = Other::all();
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view("admin.others.other",["data"=>$other]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view("admin.others.other",["data"=>$other]);
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
                return view('admin.others.create');
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.others.create');
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
        Other::create($request->all());
        return redirect("/admin/others");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view('admin.others.edit',["data"=>$other]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.others.edit',["data"=>$other]);
        }*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        $request->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            //'price'=>'required|numeric',
            'price' => 'required|integer|min:0',
            'img_path' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
            //'img_path'=>'required'
            //'img_path'=> 'mimes:jpeg,jpg,png,gif|max:1000'
            
        ]);
        $other->update($request->all());
        return redirect("/admin/others");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        $other->delete();
        return redirect("/admin/others");
    }
}
