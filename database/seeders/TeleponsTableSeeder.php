<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            ['no_telepon' => '0895605524810', 'pengguna_id' => 1],
            ['no_telepon' => '0895605524810', 'pengguna_id' => 2],
            ['no_telepon' => '0895605524810', 'pengguna_id' => 3],
        ];
// masukkan data ke database
        DB::table('telepons')->insert($telepons);

    }
}
