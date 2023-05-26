@extends('layouts.baseTemplate')

@section('content')

<h1>Главная страница с постами</h1>

    @foreach($posts as $post)

        <h2>
            <a href="{{route('post.show', $post->id)}}">
                {{$post->title}}
            </a>
        </h2>

        <p><b>{{$post->author}}</b></p>

        <p>{{$post->text}}</p>


    @endforeach


@endsection

