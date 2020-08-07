<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355612782UsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();


            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('status')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('address')->nullable();
            $table->string('date_of_entry')->nullable();
			$table->string('contact_number')->nullable();

            $table->float('day1_temperature')->nullable();
            $table->float('day2_temperature')->nullable();
            $table->float('day3_temperature')->nullable();
            $table->float('day4_temperature')->nullable();
            $table->float('day5_temperature')->nullable();
            $table->float('day6_temperature')->nullable();
            $table->float('day7_temperature')->nullable();
            $table->float('day8_temperature')->nullable();
            $table->float('day9_temperature')->nullable();
            $table->float('day10_temperature')->nullable();
            $table->float('day11_temperature')->nullable();
            $table->float('day12_temperature')->nullable();
            $table->float('day13_temperature')->nullable();
            $table->float('day14_temperature')->nullable();


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

            $table->string('last_location')->nullable();

            $table->string('hospital')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('doctor_number')->nullable();
            $table->longText('notes')->nullable();

            $table->string('date_of_admission')->nullable();

            $table->string('pcr_swab_test_date')->nullable();
            $table->string('pcr_swab_test_results')->nullable();
            $table->string('pcr_swab_date_of_results')->nullable();

            $table->string('rapid_test_date')->nullable();
            $table->string('rapid_test_results')->nullable();
            $table->string('rapid_date_of_results')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
