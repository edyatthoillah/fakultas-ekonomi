<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',

        'hero_title',
        'hero_image',

        'description',

        'head_of_program',
        'head_of_program_photo',
        'head_of_program_greeting',

        'vision',
        'mission',

        'organization_structure',

        'accreditation',
        'accreditation_number',

        'email',
        'phone',

        'brochure_file',
    ];
}
