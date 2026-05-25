<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentCategory;
use Illuminate\Support\Str;

class StudentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Himpunan Mahasiswa',
            'Mahasiswa Berprestasi',
            'Kegiatan Mahasiswa',
            'Praktik Kerja Lapang',
        ];

        foreach ($categories as $category) {
            StudentCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
