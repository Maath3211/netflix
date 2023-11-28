<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersoneFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("films_personne")->insert([
            [
                'film_id'=> '1',
                'personne_id'=> '1'
            ],
            [
                'film_id'=> '2',
                'personne_id'=> '2'
            ],
            [
                'film_id'=> '3',
                'personne_id'=> '4'
            ],
            [
                'film_id'=> '4',
                'personne_id'=> '6'
            ],
            [
                'film_id'=> '5',
                'personne_id'=> '7'
            ],
            [
                'film_id'=> '6',
                'personne_id'=> '13'
            ],
            [
                'film_id'=> '7',
                'personne_id'=> '13'
            ],
            [
                'film_id'=> '8',
                'personne_id'=> '15'
            ],
            [
                'film_id'=> '9',
                'personne_id'=> '16'
            ],
            [
                'film_id'=> '10',
                'personne_id'=> '17'
            ],
            ]);
    }
}
