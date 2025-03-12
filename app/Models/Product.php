<?php

namespace App\Models;

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
        'user_id'
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categories():BelongsToMany{
        return $this->belongsToMany(Category::class, 'category_products');
    }
}
