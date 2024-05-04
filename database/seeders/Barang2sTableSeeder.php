<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'Laptop', 'harga' => 2400000, 'stok' => 100],
            ['nama_barang' => 'Hp', 'harga' => 1000000, 'stok' => 500],
            ['nama_barang' => 'Tablet', 'harga' => 1400000, 'stok' => 300],
        ];

        //masukan data ke database
        DB::table('barang2s')->insert($barang2s);
    }
}
