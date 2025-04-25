<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [

        'title', 
        'slug', 
        'image', 
        'content', 
        'active',
        'published_at',
        'user_id',
        'meta_title',
        'meta_description'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    // public function blog():BelongsToMany{
    //     return $this->belongsToMany(Blog::class, 'blog');
    // }

}

