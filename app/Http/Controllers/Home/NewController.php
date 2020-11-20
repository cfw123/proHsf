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

        $new_list = Newcont::orderBy('updated_at', 'DESC')->paginate(4);
//        dd($new_list);
        if ($pid && $id) {
            $new_cont = Newcont::find($id);
            return view('home.new.cont', compact('new_cont'));
        }

        if ($pid) {

            $new_list = Newcont::where('cid', $pid)->paginate(2);
        }

        return view('home.new.index', compact('new_list'));
    }


    // cont 内容
    public function cont($pid = 1, $id = 1)
    {
        return view('home.new.cont');
    }
}
