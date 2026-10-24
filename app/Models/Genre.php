<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiksi', 'description' => 'Buku yang berisi karangan atau imajinasi penulis, seperti novel, cerpen, dan cerita fantasi.'],
            ['id' => 2, 'name' => 'Non-Fiksi', 'description' => 'Buku yang berisi fakta, pengetahuan, atau pengalaman nyata, seperti pengembangan diri, keuangan, dan bisnis.'],
            ['id' => 3, 'name' => 'Fiksi Ilmiah', 'description' => 'Cerita fiksi berlatar sains dan teknologi, seperti petualangan luar angkasa, robot, dan dunia masa depan.'],
            ['id' => 5, 'name' => 'Romance', 'description' => 'Cerita yang berfokus pada kisah cinta dan hubungan antar tokoh.'],
            ['id' => 6, 'name' => 'Misteri', 'description' => 'Cerita yang berpusat pada teka-teki dan penyelidikan.'],
        ];
    }
}