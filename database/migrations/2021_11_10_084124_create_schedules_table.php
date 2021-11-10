<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user')->index();
            $table->foreign('id_user')->references('id')->on('users');


            $table->unsignedBigInteger('id_gym')->index();
            $table->foreign('id_gym')->references('id')->on('gyms');

            $table->unsignedBigInteger('id_coach')->index();
            $table->foreign('id_coach')->references('id')->on('coaches');

            $table->unsignedBigInteger('id_training_program')->index();
            $table->foreign('id_training_program')->references('id')->on('training_programs');

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
        Schema::dropIfExists('schedules');
    }
}
