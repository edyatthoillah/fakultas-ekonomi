<?php

namespace Database\Seeders;

use App\Models\FacilityCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FacilityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fasilitas Umum',
            'Laboratorium',
            'Ruang Baca',
            'Ruang Budaya Tiongkok',
            'Ruang Kelas',
        ];

        foreach ($categories as $category) {
            FacilityCategory::updateOrCreate(
                [
                    'slug' => Str::slug($category),
                ],
                [
                    'name' => $category,
                ]
            );
        }
    }
}
