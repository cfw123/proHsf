<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Procont;
use Illuminate\Http\Request;

class ProductController extends NavController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro_list = Procont::all();

        return view('home.product.index',compact('pro_list'));
    }

    public function cont($pid=null,$id=null)
    {
        if($pid&&$id){
            $pro_cont = Procont::find($id);
            return view('home.product.cont',compact('pro_cont'));
        }

        if($pid){

            $pro_list = Procont::where('cid',$pid)->get();
        }
        return view('home.product.index',compact('pro_list'));
    }




}
