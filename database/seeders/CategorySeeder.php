<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Pengumuman',
            'Kerja Sama Dalam Negeri',
            'Kerja Sama Internasional',
            'MoU & MoA',
            'Kunjungan & Delegasi',
            'Program Pertukaran',
            'Beasiswa & Mobilitas',
            'Riset & Kolaborasi Akademik',
            'Seminar & Workshop Internasional',
            'Konferensi & Event',
            'Kemitraan Industri',
            'Publikasi & Prestasi Internasional',
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat,
                'slug' => Str::slug($cat),
            ]);
        }
    }
}
