<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Andrea Hirata',
            'nationality' => 'Indonesia',
            'birthdate' => '1967-10-24'
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'nationality' => 'Indonesia',
            'birthdate' => '1979-05-21'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'nationality' => 'United Kingdom',
            'birthdate' => '1965-07-31'
        ]);

        Author::create([
            'name' => 'Stephen King',
            'nationality' => 'United States',
            'birthdate' => '1947-09-21'
        ]);

        Author::create([
            'name' => 'Raditya Dika',
            'nationality' => 'Indonesia',
            'birthdate' => '1984-12-28'
        ]);
    }
}
