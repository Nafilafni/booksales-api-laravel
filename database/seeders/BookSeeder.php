<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laut Bercerita',
            'description' => 'Kisah tentang persahabatan, perjuangan, dan kehilangan di tengah kondisi politik Indonesia.',
            'price' => 99000,
            'stock' => 20,
            'cover_photo' => 'buku1.jpg',
            'genre_id' => 1,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'Panduan membangun kebiasaan baik melalui perubahan kecil yang dilakukan secara konsisten.',
            'price' => 99000,
            'stock' => 4,
            'cover_photo' => 'buku2.jpg',
            'genre_id' => 2,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Hujan',
            'description' => 'Cerita tentang persahabatan, kehilangan, dan harapan di masa depan yang dilanda bencana.',
            'price' => 99000,
            'stock' => 20,
            'cover_photo' => 'buku3.jpg',
            'genre_id' => 3,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Pulang',
            'description' => 'Perjalanan seorang pemuda mencari jati diri dan arti rumah.',
            'price' => 99000,
            'stock' => 16,
            'cover_photo' => 'buku4.jpg',
            'genre_id' => 1,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Nanti Kita Cerita Tentang Hari Ini',
            'description' => 'Kumpulan cerita tentang keluarga dan proses tumbuh dewasa.',
            'price' => 85000,
            'stock' => 20,
            'cover_photo' => 'buku7.jpg',
            'genre_id' => 1,
            'author_id' => 4
        ]);
    }
}