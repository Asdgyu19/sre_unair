<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'vision',
        'mission',
        'logo',
        'cover_image',
        'contact_email',
        'contact_phone',
        'address',
        'social_media_links',
    ];

    protected $casts = [
        'social_media_links' => 'array',
    ];
}

