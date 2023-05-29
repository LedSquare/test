<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $attributes =[
        'user_id' => 4,
    ];

    protected $fillable = [
        'text',
        'title',
        'image',
        'published_date',
        'tag_name',
    ];

    public function isPublished()
    {

    }
    use HasFactory;

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,
            'relations_posts_tags',
            'post_id',
            'tag_id'
        );
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


}
