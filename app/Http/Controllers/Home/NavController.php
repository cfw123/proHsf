<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Procate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class NavController extends Controller
{

    public function __construct()
    {
        $Procates = Procate::all();
        View::share('Procates', $Procates);// 共享数据
    }
}
