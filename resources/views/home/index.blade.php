@extends('layouts.baseTemplate')

@section('page.title', 'Главная')

@section('content')
    <div class="container">
        <div class="m-2 d-flex justify-content-between">
            <h1 class="text-center">Главная страница с постами</h1>
            <button class="btn btn-primary">
                <a href="{{route('post.create')}}">Создать пост</a>
            </button>
       </div>
    </div>
        <section class="w-70 ">
            <div class="container">
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                            <h2>
                                <a href="{{route('post.show', $post->id)}}">
                                    {{$post->title}}
                                </a>
                            </h2>
                        <div class="card">
                            <div class="card-body">
                               <p><b>Автор:  {{$post->author}}</b></p>

                                <p>{{$post->text}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </section>






@endsection

