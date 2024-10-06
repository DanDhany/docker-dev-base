<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'categories_name',
        'is_active',
        'is_show',
    ];
    public function subcategory(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
    public function information(): HasMany
    {
        return $this->hasMany(Information::class);
    }
    public function document(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
