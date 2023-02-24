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

route::view('/about','about');

route::view('/contactpage','contactpage');

route::view('/service','service');

route::view('/bloglanding','bloglanding');

route::view('/blogsingle','blogsingle');

route::view('/product','product');
