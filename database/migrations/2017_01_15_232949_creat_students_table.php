<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatStudentsTable extends Migration
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
            $table->string('email')->unique();
            $table->double('universityId')->unique();   
            $table->rememberToken();
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
         Schema::drop('students');
    }
}
