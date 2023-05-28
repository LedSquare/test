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

       $user = new User;

        $user->nickname = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->admin_check = $validated['admin_check'];
        $user->moder_check = $validated['moder_check'];
//        $user->save();

//        dd($user->toArray());
        return redirect()->route('post');
    }
}
