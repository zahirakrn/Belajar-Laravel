<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Zahira Kurnia', 'jenis_kelamin' => 'Perempuan'],
            ['nama_pembeli' => 'Nashwa Kayla', 'jenis_kelamin' => 'Perempuan'],
            ['nama_pembeli' => 'Huang Renjun', 'jenis_kelamin' => 'Laki-Laki'],
        ];

        //masukan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
