<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Tas', 'jumlah' => 100],
            ['nama' => 'Sepatu', 'jumlah' => 150],
            ['nama' => 'Sendal', 'jumlah' => 200],
        ];

//masukan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
