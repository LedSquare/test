<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $attributes =[
        'user_id' => 3,
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
}
