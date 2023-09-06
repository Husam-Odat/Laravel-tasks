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
        Schema::create('stu_cours', function (Blueprint $table) {
            // $table->increments('id');
            // $table->unsignedBigInteger('cou_id');
            // $table->unsignedBigInteger('stu_id');
            // $table->integer('mark');

            // $table->timestamps();
            // $table->foreign('stu_id')->references('id')->on('students');
            // $table->foreign('cou_id')->references('id')->on('courses');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
