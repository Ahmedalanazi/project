<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('category_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->boolean('status')->default(false);
            $table->string('user_type');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function($table) {

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');

        });

        Schema::table('users', function($table) {

            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
