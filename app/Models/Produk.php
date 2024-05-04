<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_produk', 'jumlah', 'tanggal_produksi', 'id_merks'];
    public $timestamps = true;

     public function merks()
    {
        return $this->belongsTo(merks::class, 'id_merks');
    }
}
