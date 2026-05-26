<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'category_id',
        'user_id',
        'status',
        'published_at',
        'views',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // 🔗 RELASI

    // ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // ke user/admin
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // many-to-many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tags');
    }

    // one-to-many images
    public function images()
    {
        return $this->hasMany(NewsImage::class);
    }
}
