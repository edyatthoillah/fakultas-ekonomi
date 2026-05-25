<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InformationCategory;
use Illuminate\Support\Str;

class InformationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Kolaborasi dan Kerja sama',
            'Seminar',
            'Beasiswa',
            'Peluang Kerja',
            'Profil Lulusan',
        ];

        foreach ($categories as $category) {
            InformationCategory::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
