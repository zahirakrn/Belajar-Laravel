<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang2s' => 1, 'id_pembelis' => 1, 'jumlah' => 10, 'tanggal' => '2023-11-02'],
            ['id_barang2s' => 1, 'id_pembelis' => 1, 'jumlah' => 15, 'tanggal' => '2023-10-03'],
            ['id_barang2s' => 2,'id_pembelis' => 2, 'jumlah' => 20, 'tanggal' => '2023-09-04'],
            ['id_barang2s' => 2,'id_pembelis' => 2, 'jumlah' => 25, 'tanggal' => '2023-09-05'],
            ['id_barang2s' => 3,'id_pembelis' => 3, 'jumlah'=> 30, 'tanggal' => '2023-08-06'],
            ['id_barang2s' => 3,'id_pembelis' => 3, 'jumlah'=> 35, 'tanggal' => '2023-08-07'],
    ];

            //masukan data ke database
            DB::table('transaksis')->insert($transaksis);

    }
}
