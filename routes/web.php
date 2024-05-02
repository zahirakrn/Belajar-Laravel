<?php

use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// route saya
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya<br>'
        . 'Laravel, emang keren';
});

//buat route basic introduce yourselft
Route::get('/zahirakrn', function () {
    return '<h1>Biodata</h1>'
        . 'Nama: Zahira Kurnia Anandita<br>'
        . 'Tempat Tanggal Lahir: Bandung, 03 Januari 2007<br>'
        . 'Jenis Kelamin: Perempuan<br>'
        . 'Alamat: Cibaduyut Lama<br>'
        . 'Nomor Tlpn: 082125358609<br>'
        . 'Hobi: Menonton film<br>'
        . 'Cita cita: IT Sukses Aamiin<br>'
        . 'Instagram: @zahirakrnn_';
});

// buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page', ['buah' => $fruit]);

});

//route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//buat sebuah route dengan 3 buah paramer
// nama, berat badan, tinggi badan
Route::get('rinci/{name}/{bb}/{tb}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan berat badan";
    }
    return "nama: $a <br> berat badan: $bb <br> tinggi badan: $tb <br> nilai BMI: $bmi <br> keterangan: $ket";
});

//Route optimal Parameter => ditandai dengan ?
Route::get('myname/{name}', function ($a) {
    // return "my name is $a";
    return 'my name is' . $a;
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Post::all();

    return view('tampil_post',compact('data'));
    

});

Route::get('/testbarang', function () {
    $data = Barang::all();

    return view('tampil_barang', compact('data'));
});
Route::get('/testsiswa', function () {
    $data = Siswa::all();

    // nampilin berdasarkan jenis kelamin
    // $data = Siswa::where('jenis kelamin', 'like', '%Perempuan%')->get();

    // nambahin data
    // $data = new Siswa;
    // $data -> nama= "Siti";
    // $data -> jenis_kelamin= "perempuan";
    // $data -> alamat= "Bojong suren";
    // $data -> agama= "Budha";
    // $data -> telpon= 98765;
    // $data -> email= "sitiyuu@gmail.com";
    // $data ->save();

    // mengubah data
    // $data = Siswa::find(13);
    // $data->nama = "alvin";
    // $data->jenis_kelamin = "Laki Laki";
    // $data->save();

    // return $data;

    return view('tampil_siswa', compact('data'));

});
