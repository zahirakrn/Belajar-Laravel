<?php

use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merks;
use App\Models\Produk;
use App\Models\Pembeli;
use App\Models\Barang2s;
use App\Models\Transaksi;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerkController;

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
// Route::get('product/{name}', function ($name) {
//     return "produk: $name";
// });

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

Route::get('/post', function () {
    $post = Post::all();

    return view('tampil_post', compact('post'));
});

Route::get('/barang', function () {
    $data = Barang::all();

    return view('tampil_barang', compact('data'));
});
Route::get('/siswa', function () {
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

Route::get('/pengguna', function () {
    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepon = Telepon::all();

    return view('tampil_telepon', compact('telepon'));
});

Route::get('/merks', function () {
    $merks = Merks::all();

    return view('tampil_merk', compact('merks'));
});

Route::get('/produk', function () {
    $produk = Produk::all();

    return view('tampil_produk', compact('produk'));
});
Route::get('/pembeli', function () {
    $pembeli = Pembeli::all();

    return view('tampil_pembeli', compact('pembeli'));
});
Route::get('/barang2', function () {
    $barang2 = Barang2s::all();

    return view('tampil_barang2', compact('barang2'));
});
Route::get('/transaksi', function () {
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});
// Route::get('/template', function () {

//     return view('template');
// });

//controller
//post
Route::get('/post2',[PostController::class,'menampilkan']);
Route::get('post2/{id}',[PostController::class,'show']);

//produk
Route::get('/produkk',[ProdukController::class,'menampilkan2']);
Route::get('produkk/{id}',[ProdukController::class,'show']);

//merk
Route::get('/merks2',[MerkController::class,'menampilkan3']);
Route::get('merks2/{id}',[MerkController::class,'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD BRAND
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);

//CRUD PRODUK
use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);
