<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/home', function () {
    return view('home');
});

Route::get('/header' ,function() {
    return view('header');
});

Route::get('/header1', function () {
    return view('header.header');
    
});


Route::get('/footer', function () {
    return view('header.footer');
    
});

Route::get('/about1', function () {
    return view('pages.about');
});

Route::get('/contact' ,function() {
    return view('pages.contact');
});


Route::resource('post' , PostController::class);