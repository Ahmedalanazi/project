<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryCoordinatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_coordinator', function (Blueprint $table) {
            
            $table->increments('id', true);
            $table->integer('category_id')->unsigned();
            $table->integer('coordinator_id')->unsigned();

            $table->rememberToken();
            $table->timestamps();       
 
            
        });

        Schema::table('category_coordinator', function($table) {

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');

        });

        Schema::table('category_coordinator', function($table) {

            $table->foreign('coordinator_id')
                  ->references('id')
                  ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('category_coordinator');    }
}
