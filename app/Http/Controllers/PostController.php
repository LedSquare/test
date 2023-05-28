<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Tag\TagRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use function Monolog\toArray;

class PostController extends Controller
{




    public function showOnePost(Request $request)
    {
//        compact('postId')
        return view('post.showChosenPost');
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


//        $post = new Post;
//
//        $post->user_id = User::query()->value('id');
//        $post->title = $validated['title'];
//        $post->image = $validated['image'] ?? null;
//        $post->published_date = $validated['published_date'];

            $post = Post::query()->create([
               'title' => $validated['title'],
               'image' => $validated['image'],
               'published_date' => $validated['published_date'],
            ]);
//        $tags = parseTags($validated['tag']);
//        foreach ($tags as $tag) {
//            DB::table('tags')->insert([
//                'tag_name' => $tag
//            ]);
//        }
//        $a = DB::table('tags')->get();

        return dd($post);
    }

    public function edit(){
        return view('post.edit');
    }


    public function update(){

    }
}
