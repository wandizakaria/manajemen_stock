<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = 'bahan';

    protected $fillable = [
        'supplier_id',
        'tgl_masuk',
        'harga_total',
        'harga_per_kg',
        'harga_per_g',
        'keterangan',
        'jumlah_gram',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
    
}
