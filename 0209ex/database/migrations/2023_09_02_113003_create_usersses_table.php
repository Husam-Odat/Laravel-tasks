<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersses', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('firstname',$length = 300);
            $table->string('lastname');
            $table->string('email') ;
            $table->string('password');
            
            $table->string('details')->nullable();
            $table->integer('roless');
            $table->time('time',$precision = 0);
            

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersses');
    }
};
