<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Genre yang menegangkan'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Cinta-cintaan itu menakjubkan'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Genre yang membuat imajinasi liar'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Ketawa-ketiwi hahahaha'
        ]);

        Genre::create([
            'name' => 'Horror',
            'description' => 'Serem banget woylah'
        ]);
    }
}
