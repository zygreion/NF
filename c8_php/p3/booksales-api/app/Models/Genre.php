<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Komedi',
            'description' => 'Lucu-lucuan',
        ],
        [
            'id' => 2,
            'name' => 'Petualangan',
            'description' => 'Mencari jati diri di tengah kehidupan.',
        ],
        [
            'id' => 3,
            'name' => 'Romansa',
            'description' => 'Percintaan yang bikin gw ngomong when yhhh',
        ],
        [
            'id' => 4,
            'name' => 'Sains',
            'description' => 'Based on facts yoww',
        ],
        [
            'id' => 5,
            'name' => 'Pengembangan Diri',
            'description' => 'Mengembangkan kemampuan intrapersonal',
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
