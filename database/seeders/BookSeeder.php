<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $faker = \Faker\Factory::create('id_ID');
    
    $categories = DB::table('categories')->get();

    foreach ($categories as $cat) {
        DB::table('books')->insert([
            'id'           => $cat->id, 
            'title'        => $faker->sentence(3),
            'author'       => $faker->name,
            'year'         => $faker->year,
            'publisher'    => $faker->company,
            'city'         => $faker->city,
            'bookshelf_id' => 1, 
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
}
