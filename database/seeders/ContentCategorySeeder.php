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
            'Penelitian',
            'Pengabdian kepada Masyarakat',
            'Publikasi Ilmiah',
            'Penghargaan',
            'Akreditasi',
        ];

        foreach ($categories as $category) {
            ContentCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
