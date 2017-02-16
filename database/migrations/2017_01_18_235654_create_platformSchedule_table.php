<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
         Schema::create('platformSchedule', function (Blueprint $table) {
            
            $table->increments('id', true);
            $table->integer('approvedproposals_id')->unsigned();
            $table->string('room_code');
            $table->integer('eventtimes_id')->unsigned();
            $table->integer('judge_one')->unsigned();
            $table->integer('judge_two')->unsigned();
            $table->integer('judge_three')->unsigned();

            
      });


      Schema::table('platformSchedule', function($table) {

            $table->foreign('approvedproposals_id')
                  ->references('id')
                  ->on('approvedproposals');

        });

      Schema::table('platformSchedule', function($table) {

            $table->foreign('eventtimes_id')
                  ->references('id')
                  ->on('eventtimes');

        });
      Schema::table('platformSchedule', function($table) {

            $table->foreign('judge_one')
                  ->references('id')
                  ->on('users');

        });
      Schema::table('platformSchedule', function($table) {

            $table->foreign('judge_two')
                  ->references('id')
                  ->on('users');

        });
      Schema::table('platformSchedule', function($table) {

            $table->foreign('judge_three')
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
         Schema::drop('platformSchedule');

      }
}
