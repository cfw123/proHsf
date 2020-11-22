<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Procont;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
class ProductController extends NavController
{

    /**
     *
     * 案例中心   列表 搜素
     * @param Request $request 搜索关键词  $kw
     * @param null $pid  案例分类 cid
     * @param null $id   案例 id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $pid=null, $id=null)
    {
        $kw = $request->get('kw');
       if(!$pid) {
           $pid='';
       }

        $pro_list = Procont::when($kw,function(Builder $query) use($kw){
            $query->orderBy('updated_at', 'DESC')->orderBy('created_at','desc')->where('pro_name','like',"%{$kw}%");
        })->paginate(4);


        if($pid&&$id){
            $pro_cont = Procont::find($id);
            return view('home.product.cont',compact('pid','pro_cont'));
        }

        if($pid){

            $pro_list = Procont::orderBy('updated_at', 'DESC')->orderBy('created_at','desc')->where('cid',$pid)->paginate(6);
        }
        return view('home.product.index',compact('pid','pro_list'));


    }


}
