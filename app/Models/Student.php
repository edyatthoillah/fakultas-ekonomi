<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Mass assignment
     */
    protected $fillable = [
        'student_category_id',
        'name',
        'description',
        'image',
        'institution',
        'date',
    ];

    /**
     * Relasi: Student milik 1 kategori
     */
    public function category()
    {
        return $this->belongsTo(StudentCategory::class, 'student_category_id');
    }
}
