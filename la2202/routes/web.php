<?php

use App\Http\Controllers\indexcontroller;
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

// display the form

Route::get('/display',function(){
    return view('display');
});


// post the data 

Route::post('/add',[indexcontroller::class,'add'])->name('adddata');

// display the data

Route::get('/display1',[indexcontroller::class,'add']);

// display the edit form

Route::get('/editform/{id}',[indexcontroller::class,'editform'])->name('editform');

// add the edit data

Route::post('/update{id}',[indexcontroller::class,'updateform'])->name('updateform');

// delete the data 

Route::get('/delete{id}',[indexcontroller::class,'deleteform'])->name('deleteform');