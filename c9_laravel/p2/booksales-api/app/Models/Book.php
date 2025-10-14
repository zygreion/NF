<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'id' => 1,
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'id' => 2,
            'title' => 'Laskar Pelangi',
            'description' => 'Pendidikan dan petualangan remaja asal Bangka.',
            'price' => 75000,
            'stock' => 3,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }

    public function getBookById($id)
    {
        $books = collect($this->books); // ubah array jadi Collection
        return $books->firstWhere('id', $id); // filter dan reset index
    }
}
