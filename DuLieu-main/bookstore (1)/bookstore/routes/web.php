<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front;
use  App\Http\Controllers\Dashboard;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Front\HistoryController;
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

Route::get('/', [Front\HomeController::class, 'index']);

Route::get('/product/{id}', [Front\ShopController::class, 'showDetail']);

Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [Front\CartController::class, 'add']);
    Route::get('/', [Front\CartController::class, 'index']);
    Route::get('delete/{rowId}', [Front\CartController::class, 'delete']);
    Route::get('/destroy', [Front\CartController::class, 'destroy']);
    Route::get('/update', [Front\CartController::class, 'update']);
});
Route::get('history',[HistoryController::class,'index'])->middleware('CheckUserLogin');

Route::prefix('checkout')->middleware('CheckUserLogin')->group(function () {
    Route::get('/', [Front\CheckoutController::class, 'index']);
    Route::post('/', [Front\CheckoutController::class, 'addOrder']);
});

Route::get('/about', function (){
    return view('front.about');
});

Route::get('/contact', function (){
   return view('front.contact');
});

Route::prefix('admin')->middleware('CheckAdminLogin')->group(function (){
    Route::redirect('','admin/user');
    Route::resource('user',UserController::class);
    Route::resource('author',AuthorController::class);
    Route::resource('category',ProductCategoryController::class);
    Route::resource('product',ProductController::class);
    Route::resource('product/{product_id}/image',ProductImageController::class);
    Route::resource('order',OrderController::class);
    Route::prefix('login')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('/',[\App\Http\Controllers\Admin\HomeController::class,'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });
    Route::get('logout',[\App\Http\Controllers\Admin\HomeController::class,'logout']);

});

//Login
Route::prefix('account')->group(function(){
    Route::get('login',[App\Http\Controllers\Front\AccountController::class, 'login']);
    Route::post('login', [App\Http\Controllers\Front\AccountController::class, 'checkLogin']);
    Route::get('logout', [App\Http\Controllers\Front\AccountController::class, 'logout']);
    Route::get('register', [App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('register', [App\Http\Controllers\Front\AccountController::class, 'postRegister']);
});

//dang lam
Route::prefix('shop')->group(function(){
    Route::get('/', [Front\ShopController::class, 'index']);
    Route::get('/{categoryName}',[Front\ShopController::class, 'category']);
});
