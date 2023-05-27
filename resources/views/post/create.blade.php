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

                            <form action="{{route('post.create.store')}}" method="POST">

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
                                        Содержание
                                    </label>
                                    <textarea type="text" name="text" class="form-control" rows="10">
                                    </textarea>
                                </div>

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

