@extends('layouts.baseTemplate')

@section('page.title', ' Страница для регистрации')


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="m-0">
                                <h3>Регистрация</h3>
                            </div>

                            <div class="card-body">

                                @include('includes.alert')

                                <form action="{{route('register.save')}}" method="POST">

    `                               @csrf

                                    <div class="mb-3">
                                        <label class="attention">
                                            Никнейм
                                        </label>
                                        <input type="name" name="name" value="{{old('name')}}" class="form-control" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label class="attention">
                                            Почта
                                        </label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" >
                                    </div>

                                    <div class="mb-3">
                                        <label class="attention">
                                            Пароль
                                        </label>
                                        <input type="password" name="password" value="" class="form-control" >
                                    </div>

                                    <div class="form-check form-switch py-2">
                                        <input value="1" name="admin_check" class="form-check-input" type="checkbox" id="admin_check" >
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Вы хотите быть админом?</label>
                                    </div>
                                    <div class="form-check form-switch py-2">
                                        <input value="1" name="moder_check" class="form-check-input" type="checkbox" id="moder_check" >
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Вы хотите быть модератором??</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Зарегистрироваться
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

