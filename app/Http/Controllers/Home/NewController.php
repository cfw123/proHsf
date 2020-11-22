<?php

namespace App\Http\Controllers\Home;

use App\Models\hsfs\Newcate;
use App\Models\hsfs\Newcont;
use Illuminate\Http\Request;

class NewController extends NavController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid = null, $id = null)
    {

        if(!$pid)
        {
            $pid='';
        }
        $new_list = Newcont::orderBy('updated_at', 'DESC')->orderBy('created_at','desc')->paginate(3);
//        dd($new_list);
        if ($pid && $id) {
            $new_cont = Newcont::find($id);
          $next_article =  Newcont::where('id','>',$id)->orderBy('id','asc')->first();
          $prev_article =  Newcont::where('id','<',$id)->orderBy('id','desc')->first();
//          dd($prev_article);
//          if($prev_article==''){
//              return 'no news';
//          }
            return view('home.new.cont', compact('next_article','prev_article','pid','new_cont'));
        }

        if ($pid) {

            $new_list = Newcont::orderBy('updated_at', 'DESC')->orderBy('created_at','desc')->where('cid', $pid)->paginate(3);
        }

        return view('home.new.index', compact('pid','new_list'));
    }


}
