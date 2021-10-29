<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**44
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' =>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
            ['title' =>'Haruskah Manusia Nikah?', 'content'=>'lorem ipsum'],
            ['title' =>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum'],
        ];
        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
