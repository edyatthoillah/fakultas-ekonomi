<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentCategory;
use Illuminate\Support\Str;

class ContentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'MoU (Memorandum of Understanding/Nota Kesepahaman)',
            'MoA (Memorandum of Agreement/Perjanjian Kerja Sama)',
            'IA (Implementation Agreement/Perjanjian Implementasi)'
        ];

        foreach ($categories as $category) {
            ContentCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
