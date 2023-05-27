<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{

    public function test()
    {
//        return 'test';

        return response('test', 200, [
            'qwe'=> 'asda',
        ]);
    }



}
