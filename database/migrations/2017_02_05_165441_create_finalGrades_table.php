<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('finalgrades', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('department_id')->unsigned(); 
            $table->integer('student_id')->unsigned();
            $table->double('average');
            $table->rememberToken();
            $table->timestamps();
    
        }); 



        Schema::table('finalgrades', function($table) {

            $table->foreign('category_id')->references('id')->on('categories');

        });

        Schema::table('finalgrades', function($table) {

            $table->foreign('department_id')->references('id')->on('departments'); 

        });

        Schema::table('finalgrades', function($table) {

            $table->foreign('student_id')->references('id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('finalgrades');
    }
}
