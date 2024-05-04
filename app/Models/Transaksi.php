<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_barang2s', 'id_pembelis', 'jumlah', 'tanggal'];
    public $timestamps = true;

     public function barang2s()
    {
        return $this->belongsTo(Barang2s::class, 'id_barang2s');
    }
    public function pembelis()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembelis');
    }
}
