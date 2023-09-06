<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


use App\Models\Post;
use App\Models\User;

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


Route::get('/insert', function () {
    DB::insert('insert into posts (fname, lname,email,is_adminn) values (?, ?,?,?)', ['husam', 'odat' ,'husam@gmail.com',0]);
});

Route::get('/read', function () {
    $result = DB::select('select * from posts where id = ?', [1]);
    // return $result; 
    // return var_dump ($result);
    foreach($result as $post){
        return $post->fname;
    }
});


Route::get('/update', function () {
    $updated = DB::update('update posts set fname = "update name" where id =?', [1]);
    return $updated; 
    // return var_dump ($result);
    
    
});


Route::get('/delete', function () {
    $deleted = DB::delete('delete from posts where fname = ?', ['husam']);
    return $deleted; 
    // return var_dump ($result);
    
    
});


// ========================
// object relational model
// =======================

Route::get('/reaa', function () {
    $posts = Post::all();
    $fnames = []; // Initialize an empty array to store fnames
    
    foreach ($posts as $post) {
        $fnames[] = $post->fname; // Add each fname to the array
    }
    
    return $fnames; // Return the array of fnames
});



Route::get('/rea', function () {

    $posts = Post::all();
    foreach($posts as $post){
        return $post ->fname;
    }
    
    
});

Route::get('/find', function () {

    $post = Post::find(4);
    
        return $post ->fname;
    
});

Route ::get('/findwhere',function(){
    $posts = Post::where('fname','mohammad')
                    ->orderBy('id','desc')
                    ->take(3)
                    ->get();
    return $posts;
});

Route ::get('/findmore',function(){
    $posts = Post::where('id','<',50)
                    ->firstOrFail();
                    
    return $posts;
});

Route::get('/basicinsert',function(){
    $post = new Post;
    $post->fname = 'ahmad';
    $post->lname = 'tamimi';
    $post->email = 'ahmadtamimi@gmail.com';
    $post->save();

});
Route::get('/basicupdate',function(){
    $post =  Post::find(9);
    $post->fname = 'ahmad';
    $post->lname = 'tamimii';
    $post->email = 'ahmadtamimiii@gmail.com';
    $post->save();

});


// must add product fillable in model to work
Route::get('/createe',function(){
    Post::create(['fname'=>'yousf','lname'=>'jaradat','email'=>'yousfjar@gmail.com']);
});

Route::get('/updatee',function(){
    Post::where('fname','mohammad')->where('is_admin',0)->update(['fname'=>'Mohammadd']);
});

Route::get('/deletee',function(){
    $post = Post::find(11);
    $post->delete();
});
Route::get('/deletee2',function(){
    //that is mean id
    // Post::destroy(12);
    // Post::destroy([13 ,14]);
    Post::where('is_admin' , 1)->delete();
});

Route::get('/softdel',function(){ //ch10 R9
    //that is mean id
    // Post::destroy(12);
    // Post::destroy([13 ,14]);
    Post::find(18)->delete();
});


Route::get('/user/{id}/post',function($id){
    return User::find($id)->post->content;
});
