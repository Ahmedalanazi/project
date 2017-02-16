<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            
        Schema::create('eventtimes', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->boolean('first')->default(true);
            $table->boolean('second')->default(true);
            $table->boolean('third')->default(true);
            $table->boolean('fourth')->default(true);
            $table->boolean('fifth')->default(true);
            $table->boolean('sixth')->default(true);
            $table->boolean('seventh')->default(true);
            $table->boolean('eighth')->default(true);
            $table->boolean('ninth')->default(true);
            $table->boolean('tenth')->default(true); 
            $table->rememberToken();
            $table->timestamps();
       });

        Schema::table('eventtimes', function($table) {

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

        });

        // Schema::create('eventtime_judge', function (Blueprint $table) {
            
        //     $table->integer('eventtime_id')->unsigned();
        //     $table->integer('judge_id')->unsigned();       

            
        //     $table->foreign('eventtime_id')
        //           ->reference('id')
        //           ->on('eventtimes')
        //           ->onDelete('cascade');

            
        //     $table->foreign('judge_id')
        //           ->reference('id')
        //           ->on('judges')
        //           ->onDelete('cascade');
            
        // }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eventtimes');
       // Schema::drop('eventtime_judge');
    }
}
