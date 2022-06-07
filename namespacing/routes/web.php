<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form_validate;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

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


Route::post('form', [form_validate::class,'form_validate']);
Route::view("show","form");


// one to one relation
Route::get('/books', [form_validate::class, 'one_relation']);

//  one to many relation
Route::get('/comments',[PostController::class, 'oneToMany_relation']);

// many to many relation
Route::get('student', [StudentController::class,'manyToMany_relation']);