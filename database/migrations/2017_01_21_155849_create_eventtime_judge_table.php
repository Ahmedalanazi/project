<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventtimeJudgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventtime_judge', function (Blueprint $table) {
            //
            $table->increments('id', true);
            $table->integer('eventtime_id')->unsigned();
            $table->integer('judge_id')->unsigned(); 

            $table->rememberToken();
            $table->timestamps();       
            
        }); 

        Schema::table('eventtime_judge', function($table) {

            $table->foreign('eventtime_id')
                  ->references('id')
                  ->on('eventtimes');

        });

        Schema::table('eventtime_judge', function($table) {

            $table->foreign('judge_id')
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
        Schema::drop('eventtime_judge');
    }
}
