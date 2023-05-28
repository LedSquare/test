<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $attributes =[
        'is_active' => true,

    ];

    protected $fillable=[
        'name', 'email'
    ];

    protected $hidden =[
        'password'
    ];

    /**
     * @var mixed
     */

}
