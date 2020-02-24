<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('obtained');
            $table->string('total');
            $table->string('date');
            $table->integer('test_id')->unsigned();


             $table->integer('subject_id')->unsigned();

             $table->integer('class_id')->unsigned();
             $table->integer('student_id')->unsigned();
             $table->integer('teacher_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('session_id')->unsigned();

              $table->foreign('test_id')->references('id')->on('test_types')
                ->onUpdate('cascade')->onDelete('cascade');

              $table->foreign('subject_id')->references('id')->on('subjects')
                ->onUpdate('cascade')->onDelete('cascade');

 $table->foreign('session_id')->references('id')->on('sessions')
                ->onUpdate('cascade')->onDelete('cascade');

                 $table->foreign('student_id')->references('id')->on('students')
                ->onUpdate('cascade')->onDelete('cascade');
                
            $table->foreign('class_id')->references('id')->on('school_classes')
                ->onUpdate('cascade')->onDelete('cascade');
               
                 $table->foreign('section_id')->references('id')->on('sections')
                ->onUpdate('cascade')->onDelete('cascade');
                
                 $table->foreign('teacher_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');



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
        Schema::dropIfExists('test_records');
    }
}
