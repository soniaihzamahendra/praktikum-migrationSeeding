<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = DB::table('users')->first();
    
        DB::table('loans')->insert([
            'user_npm' => $user->npm,
            'loan_at' => now(),
            'return_at' => now()->addDays(7),
            'created_at' => now(),
        ]);
    }
}
