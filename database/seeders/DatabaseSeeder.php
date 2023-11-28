<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*$this->call(PersonnesTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(PersoneFilmSeeder::class);*/
        $this->call(UsagerSeeder::class);
        
    }
}
