<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    //middleware
    public function __construct(){
        $this->middleware('auth');
     }


     // i make this function to take  navbar from navbar page
     public function home()
    {
        return view('crudresource.navbar'); 
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articles= Article::all();
       // dump($articles);
        return view('crudresource.index',["data"=>$articles]); //data is array carry rows 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crudresource.create");
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
            'title' => 'required|max:255',
            'description' => 'required',
            'number'=>'required|numeric|min:3|max:20',
        ]);
        $input=$request->all();//$input شايلة كل البيانات بتاع جدول اسمه article اللي user دخل بيانته
       // dd(auth()->user()->all()); // ديه هجيب كل البيانات بتاع المستخدم
        $input['user_id']=auth()->user()->id;//$input['user_id'] ضيفنا عليه id بتاع user طبعا بعد ربطنا بين  two model 
        //dd( $input)->all(); 
       Article:: create($input);
        return redirect("/articles");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("crudresource.show",["data"=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('crudresource.edit', ["data"=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'number'=>'required|numeric|min:3|max:20',
        ]);
        $article-> update($request->all());
        //dump($article);
        return redirect("/articles");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
       return redirect("/articles");
    }
}
