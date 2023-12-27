<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'content',
        'description',
        'main_image',
        'views_count',
        'likes_count',
        'meta_data',
        'is_published',
        'posted_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
    ];
}
