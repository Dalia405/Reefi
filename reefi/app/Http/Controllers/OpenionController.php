<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Openion;
use Illuminate\Support\Facades\Auth;
use Session;

class OpenionController extends Controller
{
    public function index()

    {
        if(Auth::id()){
            $user=auth()->user();
            $feedback = Openion::all();
            if($user->type=='user'){
                return view('user.feedback', ["feedback"=>$feedback]);
            }else{
                return redirect('/admin/feedback/feedback')->with("message","The admin can't write feedback you can read and delete only from here");
            }

        
        }else{
            
            return redirect('login');
        } 

        

    }
    public function view(){
        if(Auth::id())
        {
            $user=auth()->user();
            $feedback = Openion::all();
            //dd($feedback);
            if($user->type=='admin'){
                return view("admin.feedback.feedback",["data"=> $feedback]);
            }else{
                return redirect("/user/index")->with("message","sorry you dont have permisssion to access this page");
            }
            
        }else
        {
            return redirect('login');
        }
        
        //dd($feedback);
        //return view("admin.feedback.feedback");
    }
    public function destroy($id){
        $feedback = new Openion;
        $feedback = $feedback->findorfail($id);
        $feedback->delete();
        return redirect("/admin/feedback/feedback");
    }
    public function save(Request $request)

    {

        // dd($request);

        
        if(Auth::id())
        {
            $user=auth()->user();
            $feedback= new Openion;

            $feedback->name= $user->name;

            $feedback->email= $user->email;

            $feedback->comments= $request->comment;

            $feedback->star_rating= $request->rating;

            $feedback->website_rate= $request->website_rate;

            $feedback->products_rate= $request->products_rate;

            $feedback->service_rate= $request->service_rate;
            $request->validate([
                'website_rate'=> 'required',
                'products_rate' => 'required',
                'service_rate' => 'required',
                'comment'=>'required'
            ]);

            $feedback->save();

            return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
        }
        else{
            
            return redirect('login');
        }

    }
   /* if(Auth::id())
        {
          
          // $input=$request->all();
           //dd( $input);
            $user=auth()->user();
            //dd($user);
            $addpro=new Addproduct;

            $otherproduct= Other::find($id);
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
           $addpro->save();
          // dd($pageadd);
        
            return redirect("/user/other")->with("message","product added successfully");
            // return view('reef.reef',compact(['data', 'count']))->with("message","product added successfully");
        }
        else
        {
            return redirect('login');
        }*/


        public function live()

    {
        if(Auth::id()){
            $user=auth()->user();
            $feedback = Openion::all();
            //dd($feedback);
            //if($user->type=='user'){
                return view('user.wfeedback', ["data"=>$feedback]);
            //}else{
              //  return redirect('/admin/feedback/feedback')->with("message","The admin can't write feedback you can read and delete only from here");
           // }

        
        }else{
            
            return redirect('login');
        } 

        

    }
}