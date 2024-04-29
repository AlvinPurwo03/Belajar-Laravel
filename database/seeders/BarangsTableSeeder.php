<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Hp', 'jumlah'=>200],
            ['nama'=>'Laptop', 'jumlah'=>55],
            ['nama'=>'Komputer', 'jumlah'=>50]
            ];
            // masukkan data ke database
            DB::table('barangs')->insert($barangs);
    }
}
