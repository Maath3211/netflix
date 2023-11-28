<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("personnes")->insert([
            [
                "id"=> "1",
                'nom'=> 'Tom Cruise',// Mission impossible
                'date'=> '1962-07-03',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Tom_Cruise_by_Gage_Skidmore_2.jpg/220px-Tom_Cruise_by_Gage_Skidmore_2.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'1'
            ],
            [
                "id"=> "2",
                'nom'=> 'Andy Samberg', // Palm springs
                'date'=> '1978-08-18',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Andy_Samberg.png/220px-Andy_Samberg.png',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'1'
                
            ],
            [
                'id'=> '3',
                'nom'=> 'Steve Carell',// Les Minions 2 : Il était une fois Gru
                'date'=> '1962-08-16',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Steve_Carell_November_2014.jpg/220px-Steve_Carell_November_2014.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'1'
            ],
            [
                'id'=> '4',
                'nom'=> 'Kyle Balda',
                'date'=> '1971-03-09',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Kyle_Balda_2022.jpg/220px-Kyle_Balda_2022.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '5',
                'nom'=> 'Jenna Fischer',
                'date'=> '1974-03-07',
                'sexe'=> 'f',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/1/1d/Jenna_Fischer5crop.jpg',
                'realisateur'=>'0',
                'producteur'=>'0',
                'acteur'=>'1'
            ],
            [
                'id'=> '6',
                'nom'=> 'Ricky Gervais',
                'date'=> '1961-06-25',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/GervaisBlooms021218-22_%2846107510992%29_%28cropped%29.jpg/220px-GervaisBlooms021218-22_%2846107510992%29_%28cropped%29.jpg',
                'realisateur'=>'1',
                'producteur'=>'1',
                'acteur'=>'1'
            ],
            [
                'id'=> '7',
                'nom'=> 'Joseph Mallozzi',//Dark matter
                'date'=> '1965-10-16',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Josephmallozzi.jpg/220px-Josephmallozzi.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '8',
                'nom'=> 'Melissa O\'Neil',
                'date'=> '1988-07-12',
                'sexe'=> 'f',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Melissa_O%27Neil_2016.jpg/220px-Melissa_O%27Neil_2016.jpg',
                'realisateur'=>'0',
                'producteur'=>'0',
                'acteur'=>'1'
            ],
            [
                'id'=> '9',
                'nom'=> 'Chuck Lorre',// Big bang theory
                'date'=> '1952-10-18',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Chuck_Lorre_at_PaleyFest_2013.jpg/220px-Chuck_Lorre_at_PaleyFest_2013.jpg',
                'realisateur'=>'1',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '10',
                'nom'=> 'Jim Parsons',
                'date'=> '1973-03-24',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Jim_Parsons_2016.jpg/220px-Jim_Parsons_2016.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'1'
            ],
            [
                'id'=> '11',
                'nom'=> 'Kaley Cuoco',
                'date'=> '1985-11-30',
                'sexe'=> 'f',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Kaley_Cuoco_by_Gage_Skidmore.jpg/220px-Kaley_Cuoco_by_Gage_Skidmore.jpg',
                'realisateur'=>'0',
                'producteur'=>'0',
                'acteur'=>'1'
            ],
            [
                'id'=> '12',
                'nom'=> 'Justin Lin',
                'date'=> '1971-10-11',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Star_Trek_Beyond_Japan_Premiere_Red_Carpet-_Justin_Lin_%2832011084772%29_cropped.jpg/220px-Star_Trek_Beyond_Japan_Premiere_Red_Carpet-_Justin_Lin_%2832011084772%29_cropped.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '13',
                'nom'=> 'Neal H. Moritz',//13
                'date'=> '1956-06-06',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Neal_Moritz_by_Gage_Skidmore.jpg/220px-Neal_Moritz_by_Gage_Skidmore.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '14',
                'nom'=> 'Rob Cohen',//14
                'date'=> '1949-03-12',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/US_Navy_040618-N-6817C-090_Director_Rob_Cohen_visits_with_Commanding_Officer%2C_USS_Abraham_Lincoln_%28CVN_72%29%2C_Capt._Kendall_L._Card%2C_on_the_bridge_after_the_completion_of_filming%2C_the_upcoming_motion_picture_Stealth_%28cropped%29.JPG/220px-thumbnail.jpg',
                'realisateur'=>'1',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '15',
                'nom'=> 'Robert Zemeckis',//15
                'date'=> '1952-05-14',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg/220px-Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '16',
                'nom'=> 'Hanns-Bruno Kammertöns',//16
                'date'=> '1953-09-14',
                'sexe'=> 'm',
                'photo'=> 'https://images.kinorium.com/persona/300/5927469.jpg?1631799789',
                'realisateur'=>'1',
                'producteur'=>'1',
                'acteur'=>'0'
            ],
            [
                'id'=> '17',
                'nom'=> 'Louis Leterrier',//17
                'date'=> '1973-06-17',
                'sexe'=> 'm',
                'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Louis_Leterrier_by_Gage_Skidmore.jpg/220px-Louis_Leterrier_by_Gage_Skidmore.jpg',
                'realisateur'=>'0',
                'producteur'=>'1',
                'acteur'=>'0'
            ]
            ]
        );
    }
}
