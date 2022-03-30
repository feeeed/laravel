<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Auth\LoginController;

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
Auth::routes([
    'reset'=> false,
    'confirm'=> false,
    'verify'=> false
    ]);
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('get-logout');
Route::get('/', [MainController::class,'start'])->name('index');
Route::get('/films/{idfilm?}', [MainController::class,'Film'])->name('idfilm');
Route::get('/auth', [MainController::class,'auth']);
Route::get('/basket',[BasketController::class,'basket'])->name('basket');
Route::get('/basket/place',[BasketController::class,'basketPlace'])->name('basket-place');
Route::post('basket/add/{id}',[BasketController::class,'basketAdd'])->name('basket-add');
Route::post('basket/remove/{id}',[BasketController::class,'basketRemove'])->name('basket-remove');

Route::get('/categories', [MainController::class,'categories'])->name('categories');
Route::get('/{category?}', [MainController::class,'category'])->name('category');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
