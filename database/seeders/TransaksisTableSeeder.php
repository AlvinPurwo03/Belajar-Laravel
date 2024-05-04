<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

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
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 100, 'tanggal' => '1945/08/17'],
        ];
// masukkan data ke database
        DB::table('transaksis')->insert($transaksis);

    }
}
