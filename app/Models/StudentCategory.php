<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCategory extends Model
{
    use HasFactory;

    /**
     * Mass assignment
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relasi: 1 kategori punya banyak students
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'student_category_id');
    }
}
