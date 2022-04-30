<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userregister',[UserController::class,'userregform']);
Route::post('/userregister',[UserController::class,'userregdata']);
Route::get('/userlogin',[UserController::class,'userloginform'])->name('userlogin');
//Route::get('/userloginform',[UserController::class,'userloginform'])->name('userloginform');
Route::post('/userlogin',[UserController::class,'userlogin']);

Route::get('/book',[UserController::class,'bookview'])->name('book')->Middleware('authcheck');
Route::get('/logout',[UserController::class,'logout']);
Route::get('/purchases/{id}',[BookController::class,'purchases']);


Route::get('/addbook/{id}',[BookController::class,'addbook']);
