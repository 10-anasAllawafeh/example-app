<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\tstcontroller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
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

// Route::get("/choclate", function(){
//     return view("new");
// });

// Route::get("/contact", function(){
//     return view("new1");
// });

// Route::get("/about", function(){
//     return view("new2");
// });

// Route::get('/listdata', function(){
//     $tasks = [
//         'sneakers',
//         'mars',
//         'twix'  
//     ];
//     return view('listdata',compact('tasks')); 
// });

// Route::get("/search", function(HttpRequest $request){
//     return $request->name;
// });

// Route::get("/listdata", 'App\Http\Controllers\tstcontroller@test');

// Route::controller(tstcontroller::class)->group(function () {
//     Route::get('/listdata', 'test');
//     Route::get('/landPage', 'landPage');
//     Route::get('/contact', 'contact');
//     Route::get('/about', 'about');
//     Route::get('/login', 'login');
//     Route::get('/signup', 'signup');

// });

// Route::get('/id/{id}/name/{name}', [tstcontroller::class, 'render'])->where(['id' => '[0-9]+', 'name' => '[A-z]+']);

// Route::controller(tstcontroller::class)->group(function(){
//     Route::get('/index', 'index');
//     Route::get('/about_pages', 'about_pages');
//     Route::get('/service', 'service');

// });

Route::controller(CardController::class)->group(function(){
    Route::get('index', 'display');
    Route::get('add-product', 'add');
    Route::post('add-product','insert');
    Route::get('delete/id/{id}', 'destroy');
    Route::get('edit-product/id/{id}', 'edit');
    Route::put('update-product/id/{id}', 'update');
});