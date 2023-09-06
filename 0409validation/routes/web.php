<?php

use App\Http\Controllers\PostController;
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

Route::get('/reg', function () {
    return view('reg');
});
Route::get('/regi', function () {
    return view('regi');
});


// Route::get('/signup1', [PostController::class, 'handleLogin'])->name('login.submit');

Route::post('/signup', [PostController::class, 'handleLogin'])->name('login.submit');



// Route::get('/', function () {
//     return view("index");
// });

//=====true last
// Route::post('welcome', [PostController::class, 'handleLogin']);



Route::post('home', [PostController::class, 'handleLogin']);