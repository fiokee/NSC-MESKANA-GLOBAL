<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'title', 
        'category_id',
        'slug', 
        'thumbnail', 
        'body', 
        'active',
        'published_at',
        'category_id',
        'user_id',
        'meta_title',
        'meta_description'
    ];

    protected $casts = [
        'thumbnail' => 'array', // Convert JSON to an array automatically
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categories():BelongsToMany{
        return $this->belongsToMany(Category::class, 'category_products');
    }

    public function shortBody(): string{
        return Str::words(strip_tags($this->body), words: 15);
    }
}

