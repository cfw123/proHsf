<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Cate;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * 课程列表
     */
    public function index()
    {
        $data = (new Course())->getList();
        return view('admin.course.index', compact('data'));
    }

    /**
     * 添加课程显示
     */
    public function create()
    {
        $data = Cate::get();
        return view('admin.course.create', compact('data'));
    }

    /**
     * 添加入库操作
     */
    public function store(Request $request)
    {
        Course::create($request->except(['_token', 'file']));
        return redirect()->route('admin.course.index')->with('msg', '添加成功');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
