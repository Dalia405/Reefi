<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactUs;
use App\Mail\daliamail;
use App\Mail\SendMail;

use App\Mail\SendMessage;





class ContactController extends Controller
{
    //
    public function showForm() {
        return view('contactus.contactform');
      

    }


      public function sendmessage(Request $request)
      {
        $data = $request->all();
       //dd($data);
        $data=request()->validate([
            'email'=>'required|string|max:30',
            'message'=>'required|string|max:10000'
        ]);
       // dd("dfdfghj");
       // Mail::to('daliamahmoud405@gmail.com')->send(new SendMessage);
      // dd("dfdfghj");
       Mail::to(request('email'))->send(new SendMessage($data));
       return back()->with(['success'=>'Thanks For Sending Your Message And It Will Be Answered As Soon As Possible  ']);
     
      /*
          $attributes = $request->all();
         // dd( $attributes);
          $email = "daliamahmoud3698@gmail.com";
          try {
            
              Mail::to($email)->send(new SendMail($attributes));
            dd("success");
              return back();
      
          } catch (\Throwable $th) {
      
              throw $th;
          }
        */     


          
          
      }

    /*
      public function storeForm(Request $request) {
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject'=>'required',
            'message' => 'required'
         ]);
    
         ContactUs::create($request->all());
        
         Mail::send('contactus.email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'form_message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('daliamahmoud405@gmail.com', 'Hello Admin')->subject($request->get('subject'));
        });
    
        return back()->with('success', 'Thanks for contacting us.');
      }
    */
}
