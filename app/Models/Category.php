<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['title', 'slug'];
    public function products():BelongsToMany{
        return $this->belongsToMany(Product::class, 'category_products');
    }
}
