<?php

namespace App\Http\Controllers;

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
    /*
    public function index()
    {
        return view('home');
    }
    */
    public function index()
    {
        $user=auth()->user();
      
   
        if($user->type=='admin')
        {
           
             return view("admin.navbar.nav");
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

