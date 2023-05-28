@extends('layouts.baseTemplate')

@section('page.title', "Создать пост");

@section('content')

    <div class="container">
        <div class="m-2 d-flex justify-content-center">
            <h1 class="text-center">Создать пост</h1>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-10 col-md-6 offset-md-3">
                <div class="card">

                        <div class="card-body">

{{--                            @include('includes.alert')--}}

                            <form action="{{route('post.create.store')}}" enctype="multipart/form-data" method="POST">

                                <input type="hidden" name="_method" value="PUT">
                                @csrf

                                <div class="mb-3">
                                    <label class="attention">
                                        Заголовок поста
                                    </label>
                                    <input type="title" name="title" class="form-control" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="attention">
                                        Теги
                                    </label>
                                    <input type="text" name="tag_name" class="form-control" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="attention">
                                        Содержание
                                    </label>
                                    <textarea type="text" name="text" class="form-control" rows="10">
                                    </textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="attention">
                                        Картинка
                                    </label>
                                    <input type="file" name="image" id= "image" class="form-control">

                                </div>
                                <input type="hidden"  value="{{now()}}" name="published_date">

                                <button type="submit" class="btn btn-primary">
                                    Создать
                                </button>
                            </form>
                        </div>

                    </div>
            </div>
        </div>
    </div>



@endsection

