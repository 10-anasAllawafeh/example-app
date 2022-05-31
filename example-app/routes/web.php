<?php

use Illuminate\Support\Facades\Route;

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

// ROUTE::get('/index', function(){
//     return "Hello";
// });

// ROUTE::any("/", function ($name="anas")
// {
//     return response($name);
// });

Route::get("/choclate", function(){
    return view("new");
});

Route::get("/contact", function(){
    return view("new1");
});

Route::get("/about", function(){
    return view("new2");
});