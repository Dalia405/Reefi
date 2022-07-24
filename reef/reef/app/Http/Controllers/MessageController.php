<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMessage;

class MessageController extends Controller
{
    
    public function send(Request $request)
    {
         $data = $request->all();
         //dd($data);
         $data=request()->validate(['email'=>'required|string|max:30', 'message'=>'required|string|max:1000' , 'name' => 'required|string|max:30']);
         Mail::to(request('email'))->send(new SendMessage($data));
         //dd($data);
        // return back();
        //return redirect('/user/index#contactus');
        //return view("/user/index#contactus");
        return back()->with(['success'=>'Thanks For Sending Your Message And It Will Be Answered As Soon As Possible  ']);
    }
    /*public function showmess()
    {
        return view("user.messages");
        //dd("sdfghjk");
    }*/
}
