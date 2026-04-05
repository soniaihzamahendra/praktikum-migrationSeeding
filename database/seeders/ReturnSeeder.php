<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('returns')->insert([
        'loan_detail_id' => 1,
        'charge' => false,
        'amount' => 0,
        'created_at' => now(),
    ]);
    }
}
