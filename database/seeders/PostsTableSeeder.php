<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Pintar', 'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.'],
            ['title'=>'Harus Berfikir Positif', 'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.'],
            ['title'=>'Membangun Visi Misi Sukses', 'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aliquam quisquam eaque.']
            ];
            // masukkan data ke database
            DB::table('posts')->insert($posts);
    }
}
