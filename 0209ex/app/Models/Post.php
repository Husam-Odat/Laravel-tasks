<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes; // for soft del

class Post extends Model


{
    Use SoftDeletes;  // for soft del


    use HasFactory;
    // if we change defult name of table must changes
    // if we change defult id column of table must changes
    // protected $table = 'posts'; 

    // protected $primaryKey = 'id';



    protected $fillable = [
        'fname',
        'lname',
        'email'
    ];


    protected $dates = ['deleted_at']; // for soft del
}
