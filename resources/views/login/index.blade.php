@extends('layouts.baseTemplate')

@section('page.title', ' Страница для входа')


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="m-0">
                                <h3>Авторизация</h3>
                            </div>

                            <div class="card-body">

                                <form action="{{route('login.store')}}" method="POST">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="attention">
                                            Почта
                                        </label>
                                        <input type="email" name="email" class="form-control" autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label class="attention">
                                            Пароль
                                        </label>
                                        <input type="password" name="password" class="form-control" >
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Войти
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

