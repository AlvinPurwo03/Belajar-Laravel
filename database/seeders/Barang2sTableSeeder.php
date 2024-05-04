<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'HP', 'harga' => 5000000, 'stok' => 100],
            ['nama_barang' => 'Laptop', 'harga' => 10000000, 'stok' => 100],
            ['nama_barang' => 'Komputer', 'harga' => 20000000, 'stok' => 100],
        ];
// masukkan data ke database
        DB::table('barang2s')->insert($barang2s);

    }
}
