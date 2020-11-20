<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Procont;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
class ProductController extends NavController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$pid=null,$id=null)
    {
        $kw = $request->get('kw');
//        dd($kw);


        $pro_list = Procont::when($kw,function(Builder $query) use($kw){
            $query->where('pro_name','like',"%{$kw}%");
        })->paginate(4);


//        $pro_list = Procont::paginate(4);
        if($pid&&$id){
            $pro_cont = Procont::find($id);
            return view('home.product.cont',compact('pro_cont'));
        }

        if($pid){

            $pro_list = Procont::where('cid',$pid)->paginate(2);
        }

        return view('home.product.index',compact('pro_list'));
    }


}
