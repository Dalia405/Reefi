<?php

namespace App\Http\Controllers;

use App\Models\Dairy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DairyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view()
    {
        $dairy = Dairy::all();
        if(Auth::id())
        {
        
          $user=auth()->user();
          $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
          //dd($count);
          return view("user.dairy",compact(['dairy','count']));
        }
        else
        {
            return view("user.dairy",compact(['dairy']));
        }
        //return view("user.dairy",["data"=>$dairy]);
    }
    public function over(Dairy $dairy,$id)
    {
        $dairy = new Dairy;
        $dairy=Dairy::find($id);
        $dairy=Dairy::where('id' ,$dairy->id)->get();
       // $dairy =  Dairy::all();
        //$dairy = $dairy-> findOrFail($id);
        //return redirect("/user/dairy")->with(compact('data'));
        //$dairy = Dairy::all();
        return view('user.shopping',["data"=>$dairy]);
    }
    

    public function index()
    {
        //
        $dairy = Dairy::all();
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view("admin.dairy.dairy",["data"=>$dairy]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view("admin.dairy.dairy",["data"=>$dairy]);
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                return view('admin.dairy.create');
            }else{
                return redirect("/user/index")->with("message","sorry you dont permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.dairy.create');
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
        //
        $request->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            //'price'=>'required|numeric',
            'price' => 'required|integer|min:0',
           // 'img_path' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
            //'img_path'=>'required'
            //'img_path'=> 'mimes:jpeg,jpg,png,gif|max:1000'
            
        ]);
        Dairy::create($request->all());
        return redirect("/admin/dairy");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function show(Dairy $dairy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function edit(Dairy $dairy)
    {
        //
        if(Auth::id())
        {
            $user=auth()->user();
            if($user->type=='admin'){
                //return view('admin.dairy.edit',["data"=>$dairy]);
                return redirect('admin.dairy.edit')->with(["data"=>$dairy]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont have permisssion to access this page");
           }
            

        }else{
            return redirect('login');
        }
        
        /*if($user->type=='admin'){
            return view('admin.dairy.edit',["data"=>$dairy]);
        }*/
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dairy $dairy)
    {
        //
        $request->validate([
            'productname' => 'required|max:255',
            'description' => 'required',
            //'price'=>'required|numeric',
            'price' => 'required|integer|min:0',
            //'img_path' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
            //'img_path'=>'required'
            //'img_path'=> 'mimes:jpeg,jpg,png,gif|max:1000'
            
        ]);
        $dairy->update($request->all());
        return redirect("/admin/dairy");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dairy $dairy)
    {
        //
        
        $dairy->delete();
        return redirect("/admin/dairy");
    }
}
