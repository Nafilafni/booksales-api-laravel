<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'James Clear',
            'photo' => 'james_clear.jpg',
            'bio' => 'Penulis dan pembicara asal Amerika Serikat yang fokus pada kebiasaan dan peningkatan diri.'
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Penulis novel populer asal Indonesia yang produktif dan dikenal lewat bahasanya yang sederhana.'
        ]);

        Author::create([
            'name' => 'Leila S. Chudori',
            'photo' => 'leila_chudori.jpg',
            'bio' => 'Penulis dan jurnalis asal Indonesia yang karyanya sering mengangkat sejarah dan politik Indonesia.'
        ]);

        Author::create([
            'name' => 'Marchella FP',
            'photo' => 'marchella_fp.jpg',
            'bio' => 'Penulis asal Indonesia yang dikenal lewat tulisan tentang keluarga dan proses tumbuh dewasa.'
        ]);

        Author::create([
            'name' => 'Rintik Sedu',
            'photo' => 'rintik_sedu.jpg',
            'bio' => 'Penulis asal Indonesia yang dikenal lewat tulisan tentang cinta dan perasaan.'
        ]);
    }
}