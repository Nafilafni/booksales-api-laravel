<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiksi',
            'description' => 'Buku yang berisi karangan atau imajinasi penulis, seperti novel, cerpen, dan cerita fantasi.'
        ]);

        Genre::create([
            'name' => 'Non-Fiksi',
            'description' => 'Buku yang berisi fakta, pengetahuan, atau pengalaman nyata, seperti pengembangan diri, keuangan, dan bisnis.'
        ]);

        Genre::create([
            'name' => 'Fiksi Ilmiah',
            'description' => 'Cerita fiksi berlatar sains dan teknologi, seperti petualangan luar angkasa, robot, dan dunia masa depan.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Cerita yang berfokus pada kisah cinta dan hubungan antar tokoh.'
        ]);

        Genre::create([
            'name' => 'Misteri',
            'description' => 'Cerita yang berpusat pada teka-teki dan penyelidikan.'
        ]);
    }
}