@extends('layouts.baseTemplate')

@section('page.title', 'Какой то пост');

@section('content')

    <div class="container">

        <div class="m-2 d-flex justify-content-between">
            <h1 class="text-center">{{$post->title}}</h1>
            <button class="btn btn-primary">
                <a href="{{route('post.edit')}}">Редактировать</a>
            </button>
        </div>

    <div class="card">
        <div class="card-body">
            <h3>Автор: {{$user->nickname}}</h3>
            <text>
                {{$post->text}}
            </text>

            <img src="/storage/{{$image->image_path}}" alt="Ой" class="rounded img-thumbnail">
            <time><br>{{$post->published_date}}</time>
        </div>
    </div>

    </div>

@endsection

