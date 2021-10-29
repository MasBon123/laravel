<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       // $this->call(PostsTableSeeder::class);
        //$this->call(BiodatasTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(PesanansTableSeeder::class);
        $this->call(PembeliansTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(SupliersTableSeeder::class);

    }
}
