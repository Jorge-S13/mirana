<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'content',
        'image_alt',
        'slug',
        'main_image',
        'is_published',
        'posted_at',
        'category_id',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
    ];

//    public function tags(): BelongsToMany
//    {
//        return $this->belongsToMany(Tag::class,'post_tag', 'post_id','tag_id');
//    }
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
