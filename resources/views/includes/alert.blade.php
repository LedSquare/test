@if ($errors->any())

    <div class="alert alert-danger small p-2">
        <ul class="m-0">
            @foreach($errors->all() as $mes)
                <li>
                    {{$mes}}
                </li>
            @endforeach
        </ul>
    </div>

@endif
