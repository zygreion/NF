<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Pendidikan dan petualangan remaja asal Bangka.',
            'price' => 75000,
            'stock' => 3,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 3, // Fantasy
            'author_id' => 1  // Andrea Hirata
        ]);

        Book::create([
            'title' => 'Bumi',
            'description' => 'Petualangan anak-anak dengan kekuatan luar biasa di dunia paralel.',
            'price' => 72000,
            'stock' => 5,
            'cover_photo' => 'bumi.jpg',
            'genre_id' => 3, // Fantasy
            'author_id' => 2  // Tere Liye
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Seorang anak yatim piatu menemukan bahwa ia adalah penyihir.',
            'price' => 95000,
            'stock' => 7,
            'cover_photo' => 'harry_potter_1.jpg',
            'genre_id' => 3, // Fantasy
            'author_id' => 3  // J.K. Rowling
        ]);

        Book::create([
            'title' => 'It',
            'description' => 'Sekelompok anak menghadapi makhluk jahat yang muncul setiap 27 tahun.',
            'price' => 88000,
            'stock' => 4,
            'cover_photo' => 'it.jpg',
            'genre_id' => 5, // Horror
            'author_id' => 4  // Stephen King
        ]);

        Book::create([
            'title' => 'Manusia Setengah Salmon',
            'description' => 'Kumpulan cerita lucu dan reflektif tentang kehidupan sehari-hari.',
            'price' => 65000,
            'stock' => 6,
            'cover_photo' => 'manusia_setengah_salmon.jpg',
            'genre_id' => 4, // Comedy
            'author_id' => 5  // Raditya Dika
        ]);
    }
}
