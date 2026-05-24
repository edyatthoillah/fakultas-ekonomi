<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $table = 'landing_pages';

    protected $fillable = [
        'logo',
        'app_name',
        'hero_title',
        'hero_image',
        'instagram',
        'email',
        'whatsapp',
        'about_us',
        'about_us_image',
        'vision',
        'mission',
        'organization_structure',
        'leaflet_link',
        'footer_description',
        'address',
    ];

    // Optional: Accessor untuk URL gambar (biar langsung bisa dipakai di view)
    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/'.$this->logo) : null;
    }

    public function getImageHeroUrlAttribute()
    {
        return $this->image_hero ? asset('storage/'.$this->image_hero) : null;
    }

    public function getFotoTentangKamiUrlAttribute()
    {
        return $this->foto_tentang_kami ? asset('storage/'.$this->foto_tentang_kami) : null;
    }
}
