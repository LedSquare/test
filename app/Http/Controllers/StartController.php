<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartController extends Controller
{
    public  function index()
    {
        return 'VSE na meste sportsmeni';
    }
    public  function req_view()
    {
        return view('index');
    }


}
