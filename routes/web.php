<?php

use App\Models\Post;
use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route about
Route::get('/about', function () {
    return '<h1>Hello World</h1>'
        . 'Selamat Datang Di Web Saya <br>'
        . 'Saya Sedang Belajar Laravel';
});

// routes saya
Route::get('/saya', function () {
    return '<h1>Hello World, Saya Alvin<br></h1>'
        . 'Saya Sedang Belajar Laravel <br>'
        . 'Saya lahir di Bandung <br>'
        . 'Saya berumur 17 tahun <br>'
        . 'Saya tinggal di Rancamanyar <br>'
        . 'Saya sekolah di SMK ASSALAAM BANDUNG <br>'
        . 'Saya jurusan Rekayasa Perangkat Lunak <br>';
});

// buat route basic to view
Route::get('/animals', function () {
    $king = 'Lion';
    $hewan = ['Lion', 'Tiger', 'Elephant', 'Bear', 'Zebra'];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('/vegetables', function () {
    $fruit = ['Apple', 'Banana', 'Orange', 'Pear'];
    return view('vegetables_page', ['buah' => $fruit]);
});

//route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "Produk : $name";
});

// buatlah route parameter nama, berat badan, tinggi badan
Route::get('myself/{nama}/{beratBadan}/{tinggiBadan}', function ($nama, $bb, $tb) {

    $bmi = $bb / (($tb / 100) ** 2);

    if ($bmi > 30) {
        $ket = "Obesitas";
    } else if ($bmi > 25) {
        $ket = "Kelebihan";
    } else if ($bmi > 18.5) {
        $ket = "Ideal";
    } else if ($bmi < 18.5) {
        $ket = "Kekurangan";
    }

    return "Nama : $nama <br>" .
    "Berat Badan : $bb kg <br>" .
    "Tinggi Badan : $tb cm <br>" .
    "Nilai BMI : " . round($bmi) . "<br>" .
        "Keterangan : $ket";
});

// Route Optional Parameter -> Ditandai dengan ?
Route::get('myname/{nama?}', function ($name = 'Alvin') {
    return "My Name is $name";
});

// menampilkan data dari DB
Route::get('/post', function () {
    $data = Post::all();

    return view('tampil_post', compact('data'));
});

Route::get('/barang', function () {
    $data = Barang::all();

    return view('tampiling_barang', compact('data'));
});

// belajar view
Route::get('/about', function () {
    return view('about');
});

Route::get('/siswa', function () {
    // menampilkan semua data
    $data = Siswa::all();
    
    // menampilkan sesuai id
    // $data = Siswa::find(1);

    // menampilkan menggunakan where
    // $data = Siswa::where('jenis_kelamin', 'like', '%Perempuan%')->get();

    // mengubah data
    // $data = Siswa::find(4);
    // $data->nama = "Siti";
    // $data->jenis_kelamin = "Perempuan";
    // $data->save();

    // menambahkan data
    // $data = new Siswa;
    // $data -> nama = 'Aisha';
    // $data -> jenis_kelamin = 'Perempuan';
    // $data -> alamat = 'Bandung, Sayati';
    // $data -> agama = 'Islam';
    // $data -> telepon = '0123456789';
    // $data -> email = 'aisha@gmail.com';

    // $data -> save();

    return view('tampiling_siswa', compact('data'));
});

//route pengguna
Route::get('/pengguna', function() {
    $data = Pengguna::all();

    return view('tampil_pengguna', compact('data'));
});

//route telepon
Route::get('/telepon', function() {
    $data = Telepon::all();

    return view('tampil_telepon', compact('data'));
});

//route Produk
Route::get('/produk', function() {
    $data = Produk::all();

    return view('tampil_produk', compact('data'));
});
//route Transaksi
Route::get('/transaksi', function() {
    $data = Transaksi::all();

    return view('tampil_transaksi', compact('data'));
});

// Route Template
Route::get('/template', function() {
    $data = Post::all();

    return view('template', compact('data'));
});

// Route Template Product
Route::get('/template2', function() {
    $data = Produk::all();

    return view('template2', compact('data'));
});