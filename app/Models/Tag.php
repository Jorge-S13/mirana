<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes, HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
    public function topPicks(): MorphToMany
    {
        return $this->morphedByMany(TopPicks::class, 'taggable');
    }
    public function reviews(): MorphToMany
    {
        return $this->morphedByMany(Reviews::class, 'taggable');
    }
    public function news(): MorphToMany
    {
        return $this->morphedByMany(News::class, 'taggable');
    }
    public function hardwares(): MorphToMany
    {
        return $this->morphedByMany(Hardware::class, 'taggable');
    }
    public function affiliates(): MorphToMany
    {
        return $this->morphedByMany(Affiliate::class, 'taggable');
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
