<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'oib' => 1234567891234,
                'name' => 'Antonio',
                'card_id' => 00001,
            ],
            [
                'oib' => 1234567891236,
                'name' => 'Stjepan',
                'card_id' => 00003,
            ]
        ]);

        DB::table('members')->insert([
            [
                'oib' => 1234567891235,
                'name' => 'Marko',
                'phone' => '0914564335',
                'card_id' => 00002,
            ]
        ]);
    }
}
