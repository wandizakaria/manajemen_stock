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
        'jumlah_gram',
    ];

    public function produksi()
    {
        return $this->belongsTo(Produksi::class, 'produksi_id');
    }
}
