<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController2;
use App\Http\Controllers\login;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
    // return "hi you";
});

Route::get('/contact11', function () {
    
    return "hi im contact";
});
Route::get('/about', function () {
    
    return "hi about";
});

Route :: get ('/post/{id}/{name}',function($id,$name){
    return "this is post page number".$id. " ". $name;

});

Route :: get ('/post1/{id}/{name?}',function($id,$name =null){
    return "this is post page number".$id. " ". $name;

});
Route :: get ('/post2/{id}/{name?}',function($id,$name){
    return "this is post page number".$id. " ". $name;

});

Route ::get ('/postt/{idd}',function($idd){
    return "this postt page num ".$idd ;
});

Route :: get('admin/posts/example' ,array('as'=>'admin.home' ,function(){
    $url = route('admin.home');
    return "this url is " . $url ;
}));

// Route :: get('/postindex','PostController@index');

Route::get('/hi',PostController::class . '@index');





Route::get('/db', [PostController2::class, 'index']);


Route::get('/login',[login::class, 'login']);

Route::get('/log', [login::class, 'login']);


Route::get('/log', function () {
    return view('login');
});




Route::post('/process-form', 'FormController@process')->name('process.form');



Route::get('/',function() {
    return view('login');
});

Route::post('/welcome.blade.php', FormController::class . '@index');

