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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name_po');
            $table->string('location');
            $table->string('location_name');
            $table->string('number_vehicle');
            $table->string('jenis_kendaraan');
            $table->string('driver');
            $table->string('number_stuk');
            $table->date('birthday');
            $table->string('jenis_angkutan');
            $table->string('trayek');
            $table->boolean('firstStatus')->nullable();
            $table->boolean('secondStatus')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
};
