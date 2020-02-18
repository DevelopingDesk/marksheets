<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fatherName');
            $table->string('rollnumber');
            $table->string('dob')->nullable();
            $table->string('cnic')->nullable();
            $table->string('phone')->nullable();
            $table->string('enrollment_date')->nullable();
            $table->string('leave')->nullable();

             $table->integer('class_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('session_id')->unsigned();
 $table->foreign('session_id')->references('id')->on('sessions')
                ->onUpdate('cascade')->onDelete('cascade');
               
            
            $table->foreign('class_id')->references('id')->on('school_classes')
                ->onUpdate('cascade')->onDelete('cascade');
               
                 $table->foreign('section_id')->references('id')->on('sections')
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
        Schema::dropIfExists('students');
    }
}
