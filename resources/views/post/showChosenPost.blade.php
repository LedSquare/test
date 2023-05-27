@extends('layouts.baseTemplate')

@section('page.title', 'Какой то пост');

@section('content')
    <div class="container">
        <div class="m-2 d-flex justify-content-between">
            <h1 class="text-center">Заголовок поста</h1>
            <button class="btn btn-primary">
                <a href="{{route('post.edit')}}">Редактировать</a>
            </button>
        </div>
    </div>

    <div class="container">
        <h2>Какой то пост</h2>
        <p>asdqwer</p>
    </div>



@endsection

