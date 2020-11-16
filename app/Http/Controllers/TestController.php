<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        session(['msg'=>'haha']);
        return 'ok';
    }

    public function show()
    {
        dump(session('msg'));
    }
}
