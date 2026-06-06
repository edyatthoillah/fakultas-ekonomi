<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyProgram;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyProgram::create([
            'name' => 'Manajemen',
            'slug' => 'manajemen',
            'hero_title' => 'Program Studi Manajemen',
            'description' => 'Program Studi Manajemen berkomitmen menghasilkan lulusan yang kompeten dalam bidang manajemen, kewirausahaan, dan pengambilan keputusan bisnis yang inovatif.',
            'vision' => 'Menjadi Program Studi Manajemen yang unggul dan berdaya saing di tingkat nasional.',
            'mission' => 'Menyelenggarakan pendidikan, penelitian, dan pengabdian kepada masyarakat yang berkualitas di bidang manajemen.',
            'accreditation' => 'Baik Sekali',
            'email' => 'manajemen@kampus.ac.id',
            'phone' => '(0334) 123456',
        ]);

        StudyProgram::create([
            'name' => 'Akuntansi',
            'slug' => 'akuntansi',
            'hero_title' => 'Program Studi Akuntansi',
            'description' => 'Program Studi Akuntansi menghasilkan lulusan yang profesional, berintegritas, dan mampu menerapkan ilmu akuntansi sesuai perkembangan dunia usaha dan industri.',
            'vision' => 'Menjadi Program Studi Akuntansi yang unggul dan terpercaya dalam pengembangan ilmu akuntansi.',
            'mission' => 'Menyelenggarakan pendidikan dan penelitian di bidang akuntansi yang berorientasi pada kebutuhan masyarakat dan dunia kerja.',
            'accreditation' => 'Baik Sekali',
            'email' => 'akuntansi@kampus.ac.id',
            'phone' => '(0334) 123456',
        ]);
    }
}
