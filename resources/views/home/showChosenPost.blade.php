@extends('layouts.baseTemplate')

@section('page.title', $postId);

@section('content')
{{--    @foreach($postId as $post)--}}

        <h1>{{$postId}}</h1>
        <p>asdqwer</p>
{{--        <p><b>{{$post->author}}</b></p>--}}

{{--        <p>{{$post->text}}</p>--}}


{{--    @endforeach--}}


@endsection

