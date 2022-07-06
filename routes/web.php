<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mail_controller;

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

Route::get('/', function(){
    return view('index',[
        "title" => "Home"
    ]);
});

Route::get('/create', function () {
    return view('create',[
        "title" => "Create"
    ]);
});

Route::get('/api/get-data',[mail_controller::class,'getAll']);

Route::post('/api/create-data',[mail_controller::class,'save']);

Route::get('/api/update-data/{id}',[mail_controller::class,'update']);

Route::get('/api/delete-data/{id}',[mail_controller::class,'delete']);

Route::post('/api/updated/{id}',[mail_controller::class,'updated']);