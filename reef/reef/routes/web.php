<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
Route::get('/user/navbar/nav', function () {
    $count = DB::table("addproducts")->where("email",$user->email)->sum('quantity');
    return view('user.navbar.nav',compact('count'));
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
Route::resource('/admin/meat',App\Http\Controllers\MeatController::class);
Route::resource('/admin/dairy',App\Http\Controllers\DairyController::class);

Route::resource('/admin/others',App\Http\Controllers\OtherController::class);
Route::get("/user/other", [App\Http\Controllers\OtherController::class, "view"]);
Route::get("/user/dairy", [App\Http\Controllers\DairyController::class, "view"]);
Route::get("/user/meat", [App\Http\Controllers\MeatController::class, "view"]);
//Route::get("/user/shopping/{id}", [App\Http\Controllers\DairyController::class, "over"]);
Route::post('/pageadd/{id}', [App\Http\Controllers\AddproductController::class, 'pageadd']);
Route::get('/user/shopping', [App\Http\Controllers\AddproductController::class, 'showcartpage']);
Route::get('/delete/{id}', [App\Http\Controllers\AddproductController::class, 'delete']);
Route::post('/addmeat/{id}', [App\Http\Controllers\AddproductController::class, 'addmeat']);
Route::post('/addother/{id}', [App\Http\Controllers\AddproductController::class, 'addother']);
//Route::post('/confirmorderproduct', [App\Http\Controllers\AddproductController::class, 'confirmorderproduct']);
Route::post('/user/success', [App\Http\Controllers\AddproductController::class, 'confirmorderproduct']);
Route::get('/admin/orders/orders', [App\Http\Controllers\OrderController::class, 'show']);
Route::get('/admin/aorders/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete']);
//Route::get('/admin/orders/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit']);
Route::get('/update/{id}', [App\Http\Controllers\OrderController::class, 'update']);
Route::get('/user/messages', [App\Http\Controllers\MessageController::class, 'showmess']);

Route::post('/send', [App\Http\Controllers\MessageController::class, 'send']);

Route::get('/index',[App\Http\Controllers\OpenionController::class, 'index'])->name('user.feedback');
Route::get('/user/wfeedback',[App\Http\Controllers\OpenionController::class, 'live']);


Route::post('/user/feedback',[App\Http\Controllers\OpenionController::class, 'save'])->name('user.feedback');
Route::get('/admin/feedback/feedback',[App\Http\Controllers\OpenionController::class, 'view']);//->name('user.feedback');
Route::get('/admin/feedback/destroy/{id}',[App\Http\Controllers\OpenionController::class, 'destroy']);
Route::get('/searchname', [App\Http\Controllers\SearchController::class, 'searchname']);
Route::get('/searchdeletename/{id}', [App\Http\Controllers\SearchController::class, 'searchdeletename']);






/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
