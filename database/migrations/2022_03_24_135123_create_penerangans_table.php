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
        Schema::create('penerangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('verifikasi_id');
            $table->string('lampuUtama_dekat');
            $table->string('lampuUtama_jauh');
            $table->string('sein_depan');
            $table->string('sein_belakang');
            $table->string('lampuRem');
            $table->string('lampuMundur');
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
        Schema::dropIfExists('penerangans');
    }
};
