<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Platformscoresheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('platformscoresheets', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('student_id')->unsigned(); 
            $table->integer('judge_id')->unsigned();
            $table->boolean('fineart')->default(false);
            $table->double('criteria_one');
            $table->string('criteria_one_comment');
            $table->double('criteria_two');
            $table->string('criteria_two_comment');
            $table->double('criteria_three');
            $table->string('criteria_three_comment');
            $table->double('criteria_four');
            $table->string('criteria_four_comment');
            $table->double('criteria_five');
            $table->string('criteria_five_comment');
            $table->double('criteria_six');
            $table->string('criteria_six_comment');
            $table->double('criteria_seven');
            $table->string('criteria_seven_comment');
            $table->string('general_comment');
            $table->string('experience');
            $table->double('total');
            $table->rememberToken();
            $table->timestamps();

            });


        Schema::table('platformscoresheets', function($table) {

            $table->foreign('student_id')->references('id')->on('students');

        });

        Schema::table('platformscoresheets', function($table) {

            $table->foreign('judge_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('platformscoresheets');

    }
}
