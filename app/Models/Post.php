<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'image',
        'published_date',
    ];

    public function isPublished()
    {

    }
    use HasFactory;
}
