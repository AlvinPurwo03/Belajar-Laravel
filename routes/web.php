<?php

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

    if($bmi > 30) {
        $ket = "Obesitas";
    } else if ($bmi > 25) {
        $ket = "Kelebihan";
    } else if ($bmi > 18.5) {
        $ket = "Ideal";
    } else if ($bmi < 18.5) {
        $ket = "Kekurangan";
    }

    return "Nama : $nama <br>".
    "Berat Badan : $bb kg <br>".
    "Tinggi Badan : $tb cm <br>".
    "Nilai BMI : " . round($bmi) . "<br>".
    "Keterangan : $ket";
});

// Route Optional Parameter -> Ditandai dengan ?
Route::get('myname/{nama?}', function ($name = 'Alvin') {
    return "My Name is $name";
});
