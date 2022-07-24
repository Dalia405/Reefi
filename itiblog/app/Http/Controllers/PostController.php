<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    function  post()
    {
        $modelpost = Post::all();
        //dump($modelpost);//is array that carry all of the rows so i access specified row by array[$modelpost] to display one row 
        return view('navbar.post', ["posts" => $modelpost]);
      
    }

    function storedata() 
    {
        //$req=request()->all();
        //dd($req);
        $post = new Post; // new post or new record table
        $post->title=request('title');
        $post->body=request('description');
        $post->slug=request('slug');
        $post->save();
        return redirect("/post");

    }

    function show($index)
    {
        $post = new Post;
        //dump($post) ;
        $modelpost = $post->findorfail($index);
       // dump($modelpost) ;
        return view('navbar.show' , ["post" => $modelpost]);//post is key?????????????????????
        //dump($post);
       
     }


     function edit($id)
     {
        $post = new Post;
        $modelpost = $post->findorfail($id);
        return view('navbar.edit',["post" => $modelpost]);

     }

     function destroy($id){
        $post = new Post;
        $modelpost = $post->findorfail($id);
        $modelpost->delete();
        return redirect("/post");

    }
}
