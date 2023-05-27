<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(){
//        if (true) {
//            return redirect()->back()->withInput();
//        }

        $session =  app('session');
        dd($session);
        return 'авторизуй по братски';
    }

}
