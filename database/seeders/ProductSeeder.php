<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "PlayStation 5",
            'description' => "Sony Videogame Console",
            'price' => 800
        ]);

        DB::table('products')->insert([
            'name' => "Switch",
            'description' => "Nintendo Videogame Console",
            'price' => 400
        ]);

        DB::table('products')->insert([
            'name' => "Series S",
            'description' => "Xbox Videogame Console",
            'price' => 650
        ]);
    }
}
