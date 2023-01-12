<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('pole_position');
            $table->double('fastest_lap');
            $table->double('1st');
            $table->double('2nd');
            $table->double('3rd');
            $table->double('4th');
            $table->double('5th');
            $table->double('6th');
            $table->double('7th');
            $table->double('8th');
            $table->double('9th');
            $table->double('10th');
            $table->double('11th');
            $table->double('12th');
            $table->double('13th');
            $table->double('14th');
            $table->double('15th');
            $table->integer('leader_distance');
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
        Schema::dropIfExists('point_systems');
    }
};
