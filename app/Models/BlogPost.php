<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // Import BelongsToMany jika ada tags

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'user_id', // Penting: pastikan user_id ada di fillable
        'category_id', // Pastikan category_id ada jika digunakan
        'image', // Pastikan 'image' atau 'featured_image' ada di fillable
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    /**
     * Get the user (author) that owns the blog post.
     * Mengubah nama relasi dari 'author' menjadi 'user'
     * dan menghapus 'author_id' karena defaultnya akan mencari 'user_id'
     * yang sesuai dengan nama model 'User'.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Jika Anda memiliki relasi category, pastikan juga sudah didefinisikan
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Jika Anda memiliki relasi tags, pastikan juga sudah didefinisikan
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->whereNotNull('published_at');
    }
}
