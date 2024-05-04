<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merks extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_merks'];
    public $timestamps = true;

    //relasi ke tabel
    public function produk()
    {
        return $this->hasMany(produk::class);
    }
}
