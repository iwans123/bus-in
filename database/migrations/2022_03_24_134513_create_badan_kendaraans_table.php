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
        Schema::create('badan_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verifikasi_id');
            $table->string('kaca_depan');
            $table->string('pintu_utama');
            $table->boolean('status');
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
        Schema::dropIfExists('badan_kendaraans');
    }
};
