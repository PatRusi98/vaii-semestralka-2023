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
            $table->double('first');
            $table->double('second');
            $table->double('third');
            $table->double('fourth');
            $table->double('fifth');
            $table->double('sixth');
            $table->double('seventh');
            $table->double('eighth');
            $table->double('ninth');
            $table->double('tenth');
            $table->double('eleventh');
            $table->double('twelvth');
            $table->double('thirteenth');
            $table->double('fourteenth');
            $table->double('fifteenth');
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
