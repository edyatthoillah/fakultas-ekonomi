<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Ekonomi',
            'Bisnis',
            'Akuntansi',
            'Manajemen',
            'UMKM',
            'Beasiswa',
            'Seminar',
            'Workshop',
            'Magang',
            'Prestasi',
            'Mahasiswa',
            'Dosen',
            'Penelitian',
            'Pengabdian',
            'Kampus Merdeka',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
            ]);
        }
    }
}
