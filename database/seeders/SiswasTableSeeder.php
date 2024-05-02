<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $siswas = [
            ['nama' => 'Zahira Kurnia Anandita', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' => 'Islam' ,'telpon' => 82125 , 'email' => 'zehirakurniaanandita88@gmail.com'],
            ['nama' => 'Nashwa Kayla', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 86754 , 'email' => 'Nashwakayla@gmail.com'],
            ['nama' => 'Riska Setia', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 87623 , 'email' => 'rsksetia8@gmail.com'],
            ['nama' => 'Silva Aulia', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 89765 , 'email' => 'silvaaulia28@gmail.com'],
            ['nama' => 'Robby Romo', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 80987 , 'email' => 'robbyromo@gmail.com'],
            ['nama' => 'Renjun', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 89876, 'email' => 'huangrenjun@gmail.com'],
            ['nama' => 'Sindy Launa', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 85432 , 'email' => 'sndylauna@gmail.com'],
            ['nama' => 'Felisa', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 82456 , 'email' => 'felishaa8@gmail.com'],
            ['nama' => 'Najwa Aulia', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 83213 , 'email' => 'najwaaulia8@gmail.com'],
            ['nama' => 'Kayla Syahwalia', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Cibaduyut Lama','agama' =>'Islam' ,'telpon' => 82123 , 'email' => 'kylsyhl8@gmail.com']
];

//masukan data ke database
DB::table('siswas')->insert($siswas);

    }
}


