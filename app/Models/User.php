<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $attributes =[
        'is_active' => true,
        'is_admin' =>false,
        'is_moder' =>false,
    ];

    protected $fillable=[
        'nickname',
        'email',
        'password',
        'is_admin',
        'is_moder',
    ];

    protected $hidden =[
        'password'
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    /**
     * @var mixed
     */

}
