<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBahan extends Model
{
    use HasFactory;

    protected $table = 'stok_bahan';

    protected $fillable = [
        'bahan_id',
        'jenis_id',
        'jumlah_gram',
        'jumlah_keluar',
        'tgl_keluar',
        'keterangan',
    ];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class, 'bahan_id');
    }

    public function jenis_bahan()
    {
        return $this->belongsTo(JenisBahan::class, 'jenis_id');
    }
}
