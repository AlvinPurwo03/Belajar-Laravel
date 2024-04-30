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
            ['nama'=>'Alvin', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334250', 'email'=>'alvin@gmail.com'],
            ['nama'=>'Abdu', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334251', 'email'=>'abdu@gmail.com'],
            ['nama'=>'Ali', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334252', 'email'=>'ali@gmail.com'],
            ['nama'=>'rasya', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334253', 'email'=>'rasya@gmail.com'],
            ['nama'=>'Rasya', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334254', 'email'=>'rasya@gmail.com'],
            ['nama'=>'Wandi', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334255', 'email'=>'wandi@gmail.com'],
            ['nama'=>'Alifa', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334256', 'email'=>'alifa@gmail.com'],
            ['nama'=>'Zahran', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334257', 'email'=>'zahran@gmail.com'],
            ['nama'=>'Robby', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334258', 'email'=>'robby@gmail.com'],
            ['nama'=>'Azmi', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung, Rancamanyar', 'agama'=>'Islam', 'telepon'=>'088322334259', 'email'=>'azmi@gmail.com'],
            ];
            // masukkan data ke database
            DB::table('siswas')->insert($siswas);
    }
}
