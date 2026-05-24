<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
