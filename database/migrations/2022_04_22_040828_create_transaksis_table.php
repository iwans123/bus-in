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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->references('id')->on('vehicles');
            $table->foreignId('verifikasi_id')->references('id')->on('verifikasis');
            $table->foreignId('penerangan_id')->nullable()->references('id')->on('penerangans');
            $table->foreignId('pengereman_id')->nullable()->references('id')->on('pengeremen');
            $table->foreignId('badanKendaraan_id')->nullable()->references('id')->on('badan_kendaraans');
            $table->foreignId('ban_id')->nullable()->references('id')->on('bans');
            $table->foreignId('perlengakapan_id')->nullable()->references('id')->on('perlengkapans');
            $table->foreignId('pengukurKecepatan_id')->nullable()->references('id')->on('pengukur_kecepatans');
            $table->foreignId('wiper_id')->nullable()->references('id')->on('wipers');
            $table->foreignId('tanggapDarurat_id')->nullable()->references('id')->on('tanggap_darurats');
            $table->foreignId('peneranganPenunjang_id')->nullable()->references('id')->on('penerangan_penunjangs');
            $table->foreignId('badanKendaraanPenunjang_id')->nullable()->references('id')->on('badanKendaraan_penunjangs');
            $table->foreignId('kapasitasPenunjang_id')->nullable()->references('id')->on('kapasitas_penunjangs');
            $table->foreignId('perlengkapanPenunjang_id')->nullable()->references('id')->on('perlengkapan_penunjangs');
            $table->boolean('status_transaksi')->nullable();
            $table->boolean('status_firstVerifikasi')->nullable();
            $table->boolean('status_secondVerifikasi')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
};
