<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'featured_image',
        'gallery',
        'team_members',
        'technologies',
        'user_id',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'gallery' => 'array',
        'team_members' => 'array',
        'technologies' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

