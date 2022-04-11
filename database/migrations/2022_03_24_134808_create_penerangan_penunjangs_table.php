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
        Schema::create('penerangan_penunjangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verifikasi_id');
            $table->string('lampuPosisi_depan');
            $table->string('lampuPosisi_belakang');
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
        Schema::dropIfExists('penerangan_penunjangs');
    }
};
