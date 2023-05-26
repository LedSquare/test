<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showOnePost($postId)
    {
        return view('home.showChosenPost', compact('postId'));
    }


    public  function index()
    {
        $post = (object)[
            'id' => 23,
            'title' => 'Курс программирования за один день',
            'author' => 'Артём',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('home.index', compact('posts'));
    }
}
