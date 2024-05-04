<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merks = [
            ['nama_merks' => 'Asus'],
            ['nama_merks' => 'Lenovo'],
            ['nama_merks' => 'Acer'],
        ];

        //masukan data ke database
        DB::table('merks')->insert($merks);

    }
}
