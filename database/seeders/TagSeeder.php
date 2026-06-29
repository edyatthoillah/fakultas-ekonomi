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
            'PKSUI',
            'UNSADA',
            'Kerja Sama Internasional',
            'Hubungan Internasional',
            'MoU',
            'MoA',
            'Kemitraan Global',
            'Kolaborasi Internasional',
            'Internasionalisasi Kampus',
            'Pertukaran Mahasiswa',
            'Student Exchange',
            'Visiting Lecturer',
            'Joint Research',
            'Mobility Program',
            'Beasiswa Internasional',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
            ]);
        }
    }
}
