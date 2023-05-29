<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class,
            'relations_posts_tags',
            'tag_id',
            'user_id'
        );
    }
//    use HasFactory;
}
