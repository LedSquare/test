<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public  function index()
    {
        return view('register.index');
    }//

    public  function store(Request $request)
    {
        $nickname = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $isAdmin = $request->boolean('admin_check');
        $isModer = $request->boolean('moder_check');

        dump($nickname,
            $email,
            $password,
            $isAdmin,
            $isModer);
        return 'Сохрани по братски';
    }//
}
