<?php

use App\Http\Controllers\MovieController;
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
    return view('movies.add');
});


Route::controller(MovieController::class)->group(function ()
{
    Route::get('/home', 'index');
    Route::get('/store', 'storeMovie');
    Route::get('/edit', 'editMovie');
    Route::get('/delete', 'deleteMovie');
    Route::put('/update', 'updateMovie');
    Route::post('/add-data', 'addMovie');
    
});