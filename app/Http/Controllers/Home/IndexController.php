<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Procate;

class IndexController extends NavController
{

    public function index()
    {

        $Procate = Procate::all();
        return view('home.index.index',compact('Procate'));
    }


    // 关于我们
    public function about()
    {


        return view('home.about.index');
    }


    //  客户见证
    public function video()
    {
        //
        return view('home.video.index');
    }



    //  服务中心
    public function service()
    {
        return view('home.service.index');
    }


    //  联系我们
    public function contact()
    {
        return view('home.contact.index');
    }


}
