<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'information_category_id',
        'title',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(InformationCategory::class, 'information_category_id');
    }
}
