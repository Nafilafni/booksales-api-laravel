<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'James Clear', 'photo' => 'james_clear.jpg', 'bio' => 'Penulis dan pembicara asal Amerika Serikat yang fokus pada kebiasaan dan peningkatan diri.'],
            ['id' => 2, 'name' => 'Tere Liye', 'photo' => 'tere_liye.jpg', 'bio' => 'Penulis novel populer asal Indonesia yang produktif dan dikenal lewat bahasanya yang sederhana.'],
            ['id' => 3, 'name' => 'Leila S. Chudori', 'photo' => 'leila_chudori.jpg', 'bio' => 'Penulis dan jurnalis asal Indonesia yang karyanya sering mengangkat sejarah dan politik Indonesia.'],
            ['id' => 4, 'name' => 'Marchella FP', 'photo' => 'marchella_fp.jpg', 'bio' => 'Penulis asal Indonesia yang dikenal lewat tulisan tentang keluarga dan proses tumbuh dewasa.'],
            ['id' => 5, 'name' => 'Rintik Sedu', 'photo' => 'rintik_sedu.jpg', 'bio' => 'Penulis asal Indonesia yang dikenal lewat tulisan tentang cinta dan perasaan.'],
        ];
    }
}