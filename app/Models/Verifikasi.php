<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }


    public function penerangan()
    {
        return $this->belongsTo(Penerangan::class);
    }
    public function pengereman()
    {
        return $this->belongsTo(Pengereman::class);
    }
    public function badanKendaraan()
    {
        return $this->belongsTo(Badan_kendaraan::class);
    }
    public function ban()
    {
        return $this->belongsTo(Ban::class);
    }
    public function perlengkapan()
    {
        return $this->belongsTo(Perlengkapan::class);
    }
    public function pengukurKecepatan()
    {
        return $this->belongsTo(Pengukur_kecepatan::class);
    }
    public function wiper()
    {
        return $this->belongsTo(Wiper::class);
    }
    public function tanggapDarurat()
    {
        return $this->belongsTo(Tanggap_darurat::class);
    }
    public function peneranganPenunjang()
    {
        return $this->belongsTo(Penerangan_penunjang::class);
    }
    public function badankendaraanPenunjang()
    {
        return $this->belongsTo(Badankendaraan_penunjang::class);
    }
    public function kapasitasPenunjang()
    {
        return $this->belongsTo(Kapasitas_penunjang::class);
    }
    public function perlengkapanPenunjang()
    {
        return $this->belongsTo(Perlengkapan_penunjang::class);
    }
}
