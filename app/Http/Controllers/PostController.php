<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Tag\TagRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{




    public function showOnePost()
    {
//        compact('postId')
        return view('post.showChosenPost');
    }


    public  function index(Request $request)
    {


        $post = (object)[
            'id' => 23,
            'title' => 'Курс программирования за один день',
            'author' => 'Артём',
            'image' =>'C:\xampp\htdocs\testBlog\resources\images\image.test.png',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ];

        $search = $request->input('search');

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search){

            if($search && !str_contains(translit($post->title), translit($search))){
                return false;
            }

            return true;
    });

        return view('post.index', compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function storePost(StorePostRequest $request){

        $tagValidated = $request->validate([
            'tag' => ['number' , 'unique:']
        ]);
        $validated = $request->validated();

        $post = new Post;

        $post->title = $validated['title'];
        $post->tag = $validated['tag'];
        $post->image = $validated['image'];
        $post->published_date = $validated['published_date'];

        return dd($post->toArray());
    }

    public function edit(){
        return view('post.edit');
    }


    public function update(){

    }
}
