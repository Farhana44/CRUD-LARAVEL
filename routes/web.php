<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});


Route::view("/","login");
Route::post("/",[UserController::class,'login']);
Route::get('Dashboard',[ProductController::class,'showData']);
Route::get('delete/{id}',[ProductController::class,'delete']);
Route::get('edit/{id}',[ProductController::class,'saveData']);
Route::post('edit',[ProductController::class,'update']);
Route::view('add','add');
Route::post('add',[ProductController::class,'addData']);
