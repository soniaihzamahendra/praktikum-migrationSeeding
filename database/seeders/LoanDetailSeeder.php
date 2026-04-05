<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $loan = DB::table('loans')->first();
    $book = DB::table('books')->first();

    if ($loan && $book) {
        DB::table('loan_details')->insert([
            'loan_id'    => $loan->id,
            'book_id'    => $book->id,
            'is_return'  => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
}
