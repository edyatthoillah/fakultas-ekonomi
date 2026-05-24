<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'facility_category_id',
        'image',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(FacilityCategory::class);
    }
}
