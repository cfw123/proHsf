<?php

namespace App\Http\Controllers\Admin\hsfs;

use App\Http\Controllers\Controller;
use App\Models\hsfs\Newcate;
use App\Models\hsfs\Newcont;
use Illuminate\Http\Request;

class NewcontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new Newcont())->getList();
        return view('admin.a_new.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Newcate::get();
        return view('admin.a_new.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Newcont::create($request->except(['_token', 'file']));
        return redirect()->route('admin.new.index')->with('msg', '添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hsfs\Newcont  $newcont
     * @return \Illuminate\Http\Response
     */
    public function show(Newcont $newcont)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hsfs\Newcont  $newcont
     * @return \Illuminate\Http\Response
     */
    public function edit(Newcont $newcont)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hsfs\Newcont  $newcont
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newcont $newcont)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hsfs\Newcont  $newcont
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newcont $newcont)
    {
        //
    }
}
