<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Saya Sendiri',
            'photo' => 'saya.jpg',
            'bio' => 'Adalah saya sendiri bukan orang lain',
        ],
        [
            'id' => 2,
            'name' => 'Andrea Hirata',
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis asal Bangka Belitung',
        ],
        [
            'id' => 3,
            'name' => 'Stephen Hawking',
            'photo' => 'stephen.jpg',
            'bio' => 'Seorang astrofisika asal Amerika Serikat',
        ],
        [
            'id' => 4,
            'name' => 'Uvuvwevwe Ossas',
            'photo' => 'ossas.jpg',
            'bio' => 'Penulis terkenal dari Afrika Selatan',
        ],
        [
            'id' => 5,
            'name' => 'Upin',
            'photo' => 'upin.jpg',
            'bio' => 'Upin inilah dia',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
