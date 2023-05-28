<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(UserLoginRequest $request){


        $validated = $request->validated();
        //        if (true) {
//            return redirect()->back()->withInput();
//        }

//        $session =  app('session');
//        dd($session);
        return 'авторизуй по братски';
    }

}
