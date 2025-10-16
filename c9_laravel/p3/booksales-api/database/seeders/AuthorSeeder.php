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
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis asal Bangka Belitung'
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere.jpg',
            'bio' => 'Penulis novel series Bumi Langit'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'Penulis fiksi dengan karyanya terkenal, Harry Potter'
        ]);

        Author::create([
            'name' => 'Stephen King',
            'photo' => 'stephen.jpg',
            'bio' => 'Seorang astrofisika asal Amerika Serikat'
        ]);

        Author::create([
            'name' => 'Raditya Dika',
            'photo' => 'raditya.jpg',
            'bio' => 'Penulis dan komika asli Indonesia'
        ]);
    }
}
