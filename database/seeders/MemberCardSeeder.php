<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('member_cards')->insert([
            [
                'card_id' => 00001,
                'created_date' => date('Y-m-d H:i:s'),
                'duration' => date('Y-m-d H:i:s', strtotime('+1 year')),
            ],
            [
                'card_id' => 00002,
                'created_date' => date('Y-m-d H:i:s'),
                'duration' => date('Y-m-d H:i:s', strtotime('+1 year')),
            ],
            [
                'card_id' => 00003,
                'created_date' => date('Y-m-d H:i:s'),
                'duration' => date('Y-m-d H:i:s', strtotime('+1 year')),
            ]
        ]);
    }
}
