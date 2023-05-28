<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(UserLoginRequest $request){

        $validated = $request->validated();


        $user = User::query()->get();
        dd($validated);

        return 'авторизуй по братски';
    }

}
