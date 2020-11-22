<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Newcate;
use App\Models\hsfs\Procate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class NavController extends Controller
{

    public function __construct()
    {
        $Procates = Procate::all();
        $Newcates = Newcate::all();
//        dd($Newcates);
        View::share(['Procates'=> $Procates,'Newcates'=>$Newcates]);// 共享数据
    }
}
