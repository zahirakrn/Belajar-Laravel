<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $produks = [
            ['nama_produk' => 'Asus Go14', 'jumlah' => '15', 'tanggal_produksi' => '2023-11-02', 'id_merks' => 1],
            ['nama_produk' => 'Asus Zenbook', 'jumlah' => '25', 'tanggal_produksi' => '2024-01-03', 'id_merks' => 1],
            ['nama_produk' => 'Lenovo K14', 'jumlah' => '10', 'tanggal_produksi' => '2024-03-16', 'id_merks' => 2],
            ['nama_produk' => 'Lenovo Legion', 'jumlah' => '70', 'tanggal_produksi' => '2023-12-06', 'id_merks' => 2],
            ['nama_produk' => 'Acer Nitro 5', 'jumlah' => '20', 'tanggal_produksi' => '2023-11-18', 'id-merks' => 3],
            ['nama_produk' => 'Acer Aspire 3', 'jumlah' => '10', 'tanggal_produksi' => '2023-09-28', 'id-merks' => 3],
        ];

        //masukan data ke database
        DB::table('produks')->insert($produks);

    }
}
