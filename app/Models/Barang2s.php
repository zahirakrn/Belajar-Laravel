<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang2s extends Model
{
    protected $fillable = ['id', 'nama_barang', 'harga', 'stok'];
    public $timestamps = true;

    //relasi ke tabel
    // public function transaksis()
    // {
    //     return $this->hasMany(transaksis::class);
    // }
}
