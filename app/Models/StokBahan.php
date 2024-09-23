<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBahan extends Model
{
    use HasFactory;

    protected $table = 'stok_bahan';

    protected $fillable = [
        'produksi_id',
        'jenis_bahan_id',
        'jumlah_gram',
        'jumlah_masuk',
        'jumlah_keluar',
        'tgl_keluar',
        'keterangan',
    ];

    public function produksi()
    {
        return $this->belongsTo(Produksi::class, 'produksi_id');
    }

    public function jenis_bahan()
    {
        return $this->belongsTo(JenisBahan::class, 'jenis_bahan_id');
    }
}
