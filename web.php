<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\frontCon::class,'for'] );

    Route::get('cat',[App\Http\Controllers\Admin\addController::class,'index']);
    Route::get('add',[App\Http\Controllers\Admin\addController::class,'add']);

    Route::post('insert',[App\Http\Controllers\Admin\addController::class,'insert']);
    Route::get('edit-prod/{id}',[App\Http\Controllers\Admin\addController::class,'edit']);
    Route::post('update/{id}',[App\Http\Controllers\Admin\addController::class,'update']);
    Route::get('delete-prod/{id}',[App\Http\Controllers\Admin\addController::class,'del']);

    Route::get('product',[App\Http\Controllers\Admin\productController::class,'index']);
    Route::get('add-products',[App\Http\Controllers\Admin\productController::class,'add']);
    Route::post('insert-pro',[App\Http\Controllers\Admin\productController::class,'insert']);
    Route::get('edit-product/{id}',[App\Http\Controllers\Admin\productController::class,'edit']);
    Route::post('update-product/{id}',[App\Http\Controllers\Admin\productController::class,'update']);
    Route::get('delete-prod/{id}',[App\Http\Controllers\Admin\productController::class,'del']);

//frontend


Route::get('/',[App\Http\Controllers\Frontend\fronendController::class,'index']);
    

    });
