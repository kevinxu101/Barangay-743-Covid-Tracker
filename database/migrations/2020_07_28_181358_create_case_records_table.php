<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->string('contact_number')->nullable();

            $table->integer('day1_temperature')->nullable();
            $table->integer('day2_temperature')->nullable();
            $table->integer('day3_temperature')->nullable();
            $table->integer('day4_temperature')->nullable();
            $table->integer('day5_temperature')->nullable();
            $table->integer('day6_temperature')->nullable();
            $table->integer('day7_temperature')->nullable();
            $table->integer('day8_temperature')->nullable();
            $table->integer('day9_temperature')->nullable();
            $table->integer('day10_temperature')->nullable();
            $table->integer('day11_temperature')->nullable();
            $table->integer('day12_temperature')->nullable();
            $table->integer('day13_temperature')->nullable();


            $table->string('day1_symptoms')->nullable();
            $table->string('day2_symptoms')->nullable();
            $table->string('day3_symptoms')->nullable();
            $table->string('day4_symptoms')->nullable();
            $table->string('day5_symptoms')->nullable();
            $table->string('day6_symptoms')->nullable();
            $table->string('day7_symptoms')->nullable();
            $table->string('day8_symptoms')->nullable();
            $table->string('day9_symptoms')->nullable();
            $table->string('day10_symptoms')->nullable();
            $table->string('day11_symptoms')->nullable();
            $table->string('day12_symptoms')->nullable();
            $table->string('day13_symptoms')->nullable();
            $table->string('day14_symptoms')->nullable();
            $table->string('day15_symptoms')->nullable();

            $table->string('last_location')->nullable();

            $table->string('hospital')->nullable();
            $table->dateTime('date_of_admission')->nullable();

            $table->string('type_of_test')->nullable();
            $table->string('test_results')->nullable();
            $table->string('date_of_test')->nullable();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_records');
    }
}
