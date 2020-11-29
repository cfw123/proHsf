<?php

namespace App\Http\Controllers\Admin\hsfs;

use App\Models\hsfs\Procate;
use App\Models\hsfs\Procont;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = (new Procont())->getList();
        return view('admin.a_product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Procate::get();
        return view('admin.a_product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (!$request->new_pic){
            return redirect()->route('admin.product.index')->with('msg', '请添加图片');
        }
        Procont::create($request->except(['_token', 'file']));
        return redirect()->route('admin.product.index')->with('msg', '添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Procont::find($id);
        $cates = Procate::get();
//       dd($data);
        return view('admin.a_product.edit',compact('data','id','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->except(['_token','file','_method']);
//
        if ($request->pro_pic){
            $data['pro_pic']=$request->pro_pic;
        }else{
            $data['pro_pic'] = DB::table('proconts')->where('id',$id)->value('pro_pic');

        }
        Procont::where('id','=',$id)->update($data);
       return  redirect()->route('admin.product.index')->with('msg', '修改【'.$data['pro_name'].'】成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Procont::where('id', '=', $id)->delete();
        return ['status' => 0, 'msg' => '删除成功'];
    }
}
