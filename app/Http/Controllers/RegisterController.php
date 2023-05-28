<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'is_admin' => !! $request->input('admin_check'),
            'is_moder' => !! $request->input('moder_check'),

        ]);

        dd($user->is_admin);

        return redirect()->route('post');
    }
}
