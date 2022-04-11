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
        Schema::create('tanggap_darurats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verifikasi_id');
            $table->string('pintuDarurat');
            $table->string('jendelaDarurat');
            $table->string('alatPemecahkaca');
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
        Schema::dropIfExists('tanggap_darurats');
    }
};
