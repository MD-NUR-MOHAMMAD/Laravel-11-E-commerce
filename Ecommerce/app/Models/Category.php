<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [];
    public function subcategories(): HasMany
    {
        return $this->hasMany(subcategory::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(product::class);
    }
    public function Images()
    {
        return $this->hasManyThrough(image::class, product::class);
    }
}
