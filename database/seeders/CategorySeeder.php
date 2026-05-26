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
            'Akademik',
            'Kemahasiswaan',
            'Pengumuman',
            'Beasiswa',
            'Kegiatan',
            'Seminar & Workshop',
            'Prestasi Mahasiswa',
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat,
                'slug' => Str::slug($cat),
            ]);
        }
    }
}
