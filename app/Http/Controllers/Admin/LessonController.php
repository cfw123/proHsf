<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Cate;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * 列表
     */
    public function index()
    {
        $data = Lesson::paginate(20);
        return view('admin.lesson.index', compact('data'));
    }

    /**
     * 添加显示
     */
    public function create()
    {
        // 分类
        $cateData = Cate::get();
        // 课程
        $courseData = Course::get();
        return view('admin.lesson.create', compact('cateData', 'courseData'));
    }

    /**
     * 添加处理
     */
    public function store(Request $request)
    {
        $post = $request->except(['_token']);
//        dd($post);
        Lesson::create($post);
        return redirect(route('admin.lesson.index'))->with('msg', '添加课时成功');
    }

    /**
     * 点击观看视频
     */
    public function show(Lesson $lesson)
    {
        return view('admin.lesson.show', compact('lesson'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
