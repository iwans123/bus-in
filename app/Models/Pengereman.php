<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengereman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function verifikasi()
    {
        return $this->belongsTo(Verifikasi::class);
    }
}
