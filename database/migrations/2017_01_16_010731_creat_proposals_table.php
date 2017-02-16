<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            
            $table->increments('id', true);  
            $table->integer('department_id')->unsigned();
            $table->integer('category_id')->unsigned(); 
            $table->integer('student_id')->unsigned();  
            $table->string('title');
            $table->string('type');
            $table->string('advisors_names');
            $table->string('advisor_email');
            $table->string('file');
            $table->string('group_member_names');
            $table->string('status')->default(null);
            $table->boolean('notified'); 
            $table->rememberToken();
            $table->timestamps();

     

            // $table->foreign('student_id')
            //       ->references('id')
            //       ->on('students');


            // $table->foreign('catigory_id')
            //       ->references('id')
            //       ->on('categories'); 

            // $table->foreign('department_id')
            //       ->references('id')
            //       ->on('departments');  
        });

        Schema::table('proposals', function($table) {

            $table->foreign('student_id')->references('id')->on('students');

        });

        Schema::table('proposals', function($table) {

            $table->foreign('category_id')->references('id')->on('categories');

        });

        Schema::table('proposals', function($table) {

            $table->foreign('department_id')->references('id')->on('departments'); 

        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposals');

    }
}
