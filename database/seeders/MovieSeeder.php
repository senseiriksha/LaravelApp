<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'name' => 'Moana 2',
                'producer' => 'Disney',
                'year' => 2024
            ],
            [
                'name' => 'Moana',
                'producer' => 'Disney',
                'year' => 2021
            ],
            [
                'name' => 'Encanto',
                'producer' => 'Disney',
                'year' => 2022
            ]
        ]);
    }
}
