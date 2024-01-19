<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class,'category_id','id');
    }
    public function news(): HasMany
    {
        return $this->hasMany(News::class,'category_id','id');
    }
    public function affiliates(): HasMany
    {
        return $this->hasMany(Affiliate::class,'category_id','id');
    }
    public function hardwares(): HasMany
    {
        return $this->hasMany(Hardware::class,'category_id','id');
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Reviews::class,'category_id','id');
    }
    public function topPicks(): HasMany
    {
        return $this->hasMany(TopPicks::class,'category_id','id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
