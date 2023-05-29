<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Tag\TagRequest;
use App\Models\Image;
use App\Models\Post;
use App\Models\Relations_posts_tags;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use function Monolog\toArray;


class PostController extends Controller
{




    public function showOnePost()
    {
        $post = Post::get()->find(30);
        dd($post->title, $post->tags()->select());
//        return view('post.showChosenPost', compact('post', 'user'));
    }


    public  function index(Request $request)
    {

           $validated =  $request->validate([
               'limit' => ['nullable', 'integer', 'min:1', 'max:10'],
               'page' => ['nullable', 'integer', 'min:1', 'max:10'],
            ]);

        $limit = $validated['limit'] ?? 3;


        $posts = Post::query()->paginate($limit);

        return view('post.index', compact('posts'));

    }

    public function create(){
        return view('post.create');
    }

    public function storePost(StorePostRequest $request){


        $validated = $request->validated();

//
//
//
        $post = Post::query()->create([

            'title' => $validated['title'],
            'text' => $validated['text'],
            'published_date' => $validated['published_date'],

        ]);

        $tags = parseTags($validated['tag_name']);


        foreach ($tags as $tag) {
            if($a = Tag::query()->find($tag)){
                true;
            }else {
                DB::table('tags')->insert([
                    'tag_name' => $tag,
                ]);
            };

        };


        if ($request->hasFile('image')){
            $image_path = $request->file('image')->store('images');
        }
        $image = Image::query()->create([
            'post_id' => $post->id,
            'image_path' => $image_path ?? null,
        ]);
//

//        return dd($validated);
    }

    public function edit(){
        return view('post.edit');
    }


    public function update(){

    }
}
