<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public  function index()
    {
        return view('register.index');
    }//

    public  function store(UserRegisterRequest $request)
    {

        $validated = $request->validated();

        $user = User::query()->create([

            'nickname' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),

        ]);

//        dd($user->toArray());
        return redirect()->route('post');
    }
}
