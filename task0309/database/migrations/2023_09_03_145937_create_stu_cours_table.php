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
            $table->id();
            $table->unsignedBigInteger('cou_id');
            $table->unsignedBigInteger('stu_id');
            $table->integer('mark');

            $table->timestamps();
            $table->foreign('stu_id')->references('id')->on('students');
            $table->foreign('cou_id')->references('id')->on('courses');
            // $table->foreign('stu_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('cou_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stu_cours');
    }
};
