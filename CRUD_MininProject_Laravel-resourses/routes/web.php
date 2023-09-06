<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



// Route::get('/Products.index', [ProductController::class, 'index'])->name('Products.index');

// Route::get('/Products.show', [ProductController::class, 'show'])->name('Products.show');

//DELETE
// Route::delete('/Products/{id}', [ProductController::class, 'destroy'])->name('Products.destroy');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/create', function () {
//     return view('Products/create');
// });

// Route::get('/edit', function () {
//     return view('Products/edit');
// });

// Route::get('/index', function () {
//     return view('Products.index');
// });

// Route::post('/create' ,[ProductController::class ,'store'])->name('create');
// Route::get('/Products/edit/{id}', [ProductController::class, 'edit'])->name('Products.edit');
// Route::Patch('/Products/{id}', [ProductController::class, 'update'])->name('Products.update');


// Route::get('/edit', function () {
//     return view('Products/edit');
// });


// Route::get('/Products.index', [ProductController::class, 'index'])->name('Products.index');

// Route::get('/Products.show', [ProductController::class, 'show'])->name('Products.show');

//DELETE
// Route::delete('/Products/{id}', [ProductController::class, 'destroy'])->name('Products.destroy');

Route::get('/', function () {
    return view('welcome');
});


Route::resource('Products',ProductController::class);


// Route::get('/Products.create', [PostController::class, 'handleLogin'])->name('Products.create');
