<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Alvin', 'jenis_kelamin' => 'Laki-laki'],
            ['nama_pembeli' => 'Surya', 'jenis_kelamin' => 'Laki-laki'],
            ['nama_pembeli' => 'Robby', 'jenis_kelamin' => 'Laki-laki'],
        ];
// masukkan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
