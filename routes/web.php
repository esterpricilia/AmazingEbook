<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Detail/{id}' ,[HomeController::class,'detailBook'])->name('detail');
Route::get('/Cart/{id}' ,[HomeController::class,'cart'])->name('cart');
Route::get('/addCart/{bookid}/{userid}' ,[HomeController::class,'storeCart'])->name('storeCart');
Route::get('/deleteCart/{id}/{userid}' ,[HomeController::class,'deleteCart'])->name('deleteCart');
Route::get('/transaction/{userid}' ,[HomeController::class,'transaction'])->name('transaction');


Route::get('/Profile/{id}' ,[HomeController::class,'profile'])->name('profile');
