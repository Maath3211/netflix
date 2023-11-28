<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("usagers")->insert([
            [
                'email'=> 'root@root.com',
                'nomUsager'=> 'root',
                'nom'=> 'root',
                'prenom'=> 'root',
                'role'=> 'root',
                'password'=> Hash::make('root'),
                ],
                [
                'email'=> 'normal@root.com',
                'nomUsager'=> 'normal',
                'nom'=> 'normal',
                'prenom'=> 'normal',
                'role'=> 'normal',
                'password'=> Hash::make('normal'),
                ],
                [
                    'email'=> 'kid@root.com',
                    'nomUsager'=> 'kid',
                    'nom'=> 'kid',
                    'prenom'=> 'kid',
                    'role'=> 'kid',
                    'password'=> Hash::make('kid'),
                ],

        ]);
    }
}
