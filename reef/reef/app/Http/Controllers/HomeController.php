<?php

namespace App\Http\Controllers;
use App\Models\Meat;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=auth()->user();
      
   
        if($user->type=='admin')
        {
            $meat = Meat::all();
             return view("admin.meat.meat",["data"=>$meat]);
        }
         else{
             return view('user.index');
        }
        //return view('home');
    }
}
/*public function prev()
    {
        $user=auth()->user();
        if($user->id=1){
            return view("admin.meat.meat");
        }else{
            return view('user.index');
        }
    }*/