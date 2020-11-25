<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Newcate;
use App\Models\hsfs\Newcont;
use App\Models\hsfs\Procate;
use App\Models\hsfs\Procont;
use Illuminate\Support\Facades\DB;

class IndexController extends NavController
{

    public function index()
    {

    //    案例中心
        $cid = Procate::all()->values('id');
        foreach ($cid as $item) {
            $product_list[] = Procont::where('cid', $item->id)->orderby('updated_at', 'desc')->first();
        }
       $pro_list = Procont::orderby('updated_at', 'desc')->take(16)->get();


//         新闻中心
        $new_cid = Newcate::all()->values('id');


        foreach ($new_cid as $item) {

            if($item->id  ==1){

                $new_list['left'] = Newcate::with(['news' => function ($q) {
                    $q->orderby('updated_at', 'desc')->orderby('created_at', 'desc')->take(2);
                }])->where('id',$item->id)->get()->toArray();


            }
            if($item->id  ==2){

                $new_list['right'] = Newcate::with(['news' => function ($q) {
                    $q->orderby('updated_at', 'desc')->orderby('created_at', 'desc')->take(2);
                }])->where('id',$item->id)->get()->toArray();


            }


        }

//        dd($new_list);
        return view('home.index.index', compact('new_list', 'product_list', 'pro_list'));
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
