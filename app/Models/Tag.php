<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    // many-to-many dengan news
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tags');
    }
}
