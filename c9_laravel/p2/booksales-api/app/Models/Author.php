<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Saya Sendiri',
            'nationality' => 'Jepang',
            'birthdate' => '26/06/2000',
        ],
        [
            'id' => 2,
            'name' => 'Andrea Hirata',
            'nationality' => 'Indonesia',
            'birthdate' => '13/11/1995',
        ],
        [
            'id' => 3,
            'name' => 'Stephen Hawking',
            'nationality' => 'Amerika',
            'birthdate' => '09/01/1965',
        ],
        [
            'id' => 4,
            'name' => 'Uvuvwevwe Ossas',
            'nationality' => 'Afrika Selatan',
            'birthdate' => '19/08/1982',
        ],
        [
            'id' => 5,
            'name' => 'Upin',
            'nationality' => 'Malaysia',
            'birthdate' => '30/06/2007',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
