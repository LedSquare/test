
<header class="py-4 border-bottom ">

    <div class="container px-2 gx-2">

        <div class="d-flex justify-content-between">
            <div>
                <h3>
                    <a href="{{route('home')}}">
                        БЛОГ
                    </a>
                </h3>
            </div>

            <div>
                <ul class="list-unstyled d-flex">

                    <li class="ms-4">
                        <a href="{{route('register')}}" class="{{activeLink('register')}}">
                            Регистрация
                        </a>
                    </li>
                    <li class="ms-4">
                        <a href="{{route('login')}}" class="{{activeLink('login')}}">
                            Вход
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</header>
