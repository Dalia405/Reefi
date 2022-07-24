<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Models\Addproduct;
use Illuminate\Support\Facades\Auth;

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
Route::get('/admin/navbar/nav', function () {
    return view('admin.navbar.nav');
});

Route::get('/typeuser', function () {
    if(Auth::id())
    {
        $user=auth()->user();
        if($user->type=='admin')
   {
      // dd("hi");
       return redirect("/admin/navbar/nav");
   }
   else{
   // dd("hi");

    return redirect("/user/index");
   }
}
});

Route::get('/user/navbar/nav', function () {
    //$user=Auth::id();
   //$count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
   // return view('user.navbar.nav',compact('count'));
    $products=Addproduct::all();
      // dd($products);
        if(Auth::id())
        {
        
          $user=auth()->user();
          $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
         return view('user.navbar.nav',compact('count'));
        }
        else
        {
          return view('user.navbar.nav');
        }
});

Route::get('/user/index', function () {
    return view('user.index');
});
Route::get('/user/feedback', function () {
    return view('user.feedback');
});
/*Route::get('/user/shopping', function () {
    return view('user.shopping');
});*/

//categories that display to admin to add products in home page
Route::resource('/admin/meat',App\Http\Controllers\MeatController::class);
Route::resource('/admin/dairy',App\Http\Controllers\DairyController::class);
Route::resource('/admin/others',App\Http\Controllers\OtherController::class);

//categories that display to user
Route::get("/user/other", [App\Http\Controllers\OtherController::class, "view"]);
Route::get("/user/dairy", [App\Http\Controllers\DairyController::class, "view"]);
Route::get("/user/meat", [App\Http\Controllers\MeatController::class, "view"]);
//Route::get("/user/shopping/{id}", [App\Http\Controllers\DairyController::class, "over"]);
//addproduct page that cart table that collect dairy , meat and other in cart table(addproduct)
Route::post('/adddairy/{id}', [App\Http\Controllers\AddproductController::class, 'adddairy']);
Route::post('/addmeat/{id}', [App\Http\Controllers\AddproductController::class, 'addmeat']);
Route::post('/addother/{id}', [App\Http\Controllers\AddproductController::class, 'addother']);
Route::get('/user/shopping', [App\Http\Controllers\AddproductController::class, 'showcartpage']);
Route::get('/delete/{id}', [App\Http\Controllers\AddproductController::class, 'delete']);
//Route::post('/confirmorderproduct', [App\Http\Controllers\AddproductController::class, 'confirmorderproduct']);
Route::post('/user/success', [App\Http\Controllers\AddproductController::class, 'confirmorderproduct']);

//orders that exist in admin page 
Route::get('/admin/orders/orders', [App\Http\Controllers\OrderController::class, 'show']);
Route::get('/admin/aorders/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete']);
//Route::get('/admin/orders/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit']);
Route::get('/update/{id}', [App\Http\Controllers\OrderController::class, 'update']);

// mail
Route::get('/user/messages', [App\Http\Controllers\MessageController::class, 'showmess']);
Route::post('/send', [App\Http\Controllers\MessageController::class, 'send']);

//user feedback
Route::get('/index',[App\Http\Controllers\OpenionController::class, 'index'])->name('user.feedback');
Route::get('/user/wfeedback',[App\Http\Controllers\OpenionController::class, 'live']);
Route::post('/user/feedback',[App\Http\Controllers\OpenionController::class, 'save'])->name('user.feedback');

//admin feedback
Route::get('/admin/feedback/feedback',[App\Http\Controllers\OpenionController::class, 'view']);//->name('user.feedback');
Route::get('/admin/feedback/destroy/{id}',[App\Http\Controllers\OpenionController::class, 'destroy']);

//search
Route::get('/searchname', [App\Http\Controllers\SearchController::class, 'searchname']);
Route::get('/searchdeletename/{id}', [App\Http\Controllers\SearchController::class, 'searchdeletename']);
Route::get('/searchupdatename/{id}', [App\Http\Controllers\SearchController::class, 'update']);


//auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
