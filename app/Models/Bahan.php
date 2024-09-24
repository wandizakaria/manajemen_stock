<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = 'bahan';

    protected $fillable = [
        // 'kode_bahan',
        // 'nama_bahan',
        // 'stok_bahan_id',  
        // 'jenis_id', 
        // 'user_id',        
        'supplier_id',    
        'tgl_masuk',   
        'harga_total',
        'harga_per_kg',
        'harga_per_g',
        'keterangan',
    ];

    // public function stok_bahan()
    // {
    //     return $this->belongsTo(StokBahan::class, 'stok_bahan_id');  
    // }

    // public function jenis_bahan()
    // {
    //     return $this->belongsTo(JenisBahan::class, 'jenis_id'); 
    // }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');      
    }

   

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');              
    // }
}
