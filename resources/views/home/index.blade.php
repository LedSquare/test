@extends('layouts.baseTemplate')

@section('content')

<h1>Главная страница с постами</h1>

    @foreach($posts as $post)

        <h2>
            {{$post->title}}
        </h2>
        <p><b>{{$post->author}}</b></p>
        <p>{{$post->text}}</p>


    @endforeach


@endsection

