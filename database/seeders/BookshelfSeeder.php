<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
        ['code' => 'A1', 'name' => 'Rak Utama'],
        ['code' => 'B2', 'name' => 'Rak Referensi'],
    ]);
    }
}
