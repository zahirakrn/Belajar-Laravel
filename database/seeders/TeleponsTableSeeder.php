<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $telepons = [
            ['nomor_telepon' => '082125358609', 'pengguna_id' => 1],
            ['nomor_telepon' => '089765432145', 'pengguna_id' => 2],
            ['nomor_telepon' => '087654321231', 'pengguna_id' => 3],
];

//masukan data ke database
DB::table('telepons')->insert($telepons);

    }
}
