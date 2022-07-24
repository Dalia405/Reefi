<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PrroductController;
use App\Http\Controllers\AddCart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//home page
Route::get('/navbar', function () {
    return view('navbar.navbar');
});

Route::get('/post',[App\Http\Controllers\PostController::class,"post"]);
/*
Route::get("/post", function(){

    $posts = [
        "title"=>"Post1 tilte","decription"=>"post1 description",
        "title"=>"Post2 tilte","decription"=>"post2 description",
        "title"=>"Post3 tilte","decription"=>"post3 description",
        "title"=>"Post4 tilte","decription"=>"post4 description",
      ];
    return view('navbar.post', ["key" => $posts]);
   
});*/


/*
Route::get("/show", function(){
   

    $reqParams = request();
     dd($reqParams); // dump and die 
  // dump($reqParams);
   return view('navbar.navbar');
  
});*/


/*Route::get("/show/{index}",function(){

    
    $reqParams = request();
     dd($reqParams); // dump and die 
   //dump($reqParams);
      $posts = [ "title1" => "post1", "body1"=> "description1"];
       

    return view('navbar.show',["key" => $posts]);

});*/

Route::get("/add",function(){
    return view('navbar.add');
});
Route::get("/show/{index}",[App\Http\Controllers\PostController::class,"show"]);
/*
        $posts=[
            ["title"=>"Post1 tilte","decription"=>"post1 description"],
            ["title"=>"Post2 tilte","decription"=>"post2 description"],
            ["title"=>"Post3 tilte","decription"=>"post3 description"],
            ["title"=>"Post4 tilte","decription"=>"post4 description"],
        ];

        return view('navbar.show' , ["myposts" => $posts[$index]]);
    */

Route::post("/add/storedata",[App\Http\Controllers\PostController::class,"storedata"]);

Route::get("/post/edit/{id}",[App\Http\Controllers\PostController::class,"edit"]);


Route::get("/post/delete/{id}",[App\Http\Controllers\PostController::class,"destroy"]);

//Route::get("/posts/delete/{id}", [App\Http\Controllers\PostController::class, "destroy"]);


/////////////////////////////////////////////////////articles controller with resource////////////////////////////////////////
Route::get('/navbar2',[App\Http\Controllers\ArticleController::class,"home"]);

// index create store edit update destroy show , 
// resource index create store edit update destroy show --> code 
// resourse 
Route::resource('/articles',App\Http\Controllers\ArticleController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//product route 

Route::get('/product/{id}/user', [App\Http\Controllers\ProductController::class, 'product']);

Route::get('/user/{id}/product', [App\Http\Controllers\UserController::class, 'user']);



Route::get('/navproduct', function () {
    return view('products.index');
});

Route::get('/furniturehome', function () {
    return view('furniture.index');
});

Route::get('/furnitureregister', function () {
    return view('User.register');
});



///////////////////////////////////contact us/////////////////////////////////////////////
Route::get('/showform',  [App\Http\Controllers\ContactController::class, 'showform']);

Route::post('/sendmessage',  [App\Http\Controllers\ContactController::class, 'sendmessage']);

///////////////////////////////////feedback/////////////////////////////////////////////

Route::get('/feedback', function () {
    return view('Feedback.feedback');
});

Route::get('/feedback2', function () {
    return view('Feedback.feedback2');
});
///////////////////////////////////contact/////////////////////////////////////////////
Route::get('/contact', function () {
    return view('Contact.contact');
});


//////////////////prroducts//////////////
Route::get('/welcome', [PrroductController::class, 'index']);  
Route::get('cart', [PrroductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PrroductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PrroductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PrroductController::class, 'remove'])->name('remove.from.cart');



Route::get('/addcart', function () {
    return view('addtocart');
});


Route::get('/reef', [App\Http\Controllers\ReefController::class, 'index']);

Route::post('/cartadd/{id}', [App\Http\Controllers\ReefController::class, 'addcart']);


Route::get('/showcart', [App\Http\Controllers\ReefController::class, 'showcart']);

Route::get('/delete/{id}', [App\Http\Controllers\ReefController::class, 'delete']);
Route::post('/update/{id}', [App\Http\Controllers\ReefController::class, 'update']);
//Route::patch('update-cart', 'ProductsController@update');

Route::post('/confirmorder', [App\Http\Controllers\ReefController::class, 'confirmorder']);






Route::get('/admin', [App\Http\Controllers\PageproductController::class, 'admin']);

//add cart final project
Route::get('/pageproduct', [App\Http\Controllers\PageproductController::class, 'pageproduct']);
Route::post('/pageadd/{id}', [App\Http\Controllers\PageproductController::class, 'pageadd']);
Route::get('/showcartpage', [App\Http\Controllers\PageproductController::class, 'showcartpage']);
Route::get('/deletecart/{id}', [App\Http\Controllers\PageproductController::class, 'deletecart']);
Route::post('/confirmorderproduct', [App\Http\Controllers\PageproductController::class, 'confirmorderproduct']);


//search products
Route::get('/searchproduct', [App\Http\Controllers\SearchProductController::class, 'searchproduct']);
Route::post('/addsearchproduct/{id}', [App\Http\Controllers\SearchProductController::class, 'addsearchproduct']);
Route::get('/searchshowcart', [App\Http\Controllers\SearchProductController::class, 'searchshowcart']);
Route::get('/searchdeletecart/{id}', [App\Http\Controllers\SearchProductController::class, 'searchdeletecart']);
Route::post('/searchconfirmorderproduct', [App\Http\Controllers\SearchProductController::class, 'searchconfirmorderproduct']);


Route::get('/searchname', [App\Http\Controllers\SearchProductController::class, 'searchname']);
Route::get('/searchdeletename/{id}', [App\Http\Controllers\SearchProductController::class, 'searchdeletename']);



Route::resource('/admin/meat',App\Http\Controllers\MeatController::class);
Route::resource('/admin/dairy',App\Http\Controllers\DairyController::class);
Route::resource('/admin/others',App\Http\Controllers\OtherController::class);
Route::get('/admin/orders/orders', [App\Http\Controllers\OrderController::class, 'show']);
Route::get('/admin/aorders/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete']);
//Route::get('/admin/orders/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit']);
Route::get('/update/{id}', [App\Http\Controllers\OrderController::class, 'update']);
