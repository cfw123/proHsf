<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CourseResCollection;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    // 课程列表
    public function index(Request $request) {
        // 起始位置
        $offset = $request->get('offset',0);
        // 获取的记录数
        $limit = $request->get('limit',20);
        $limit = max(min($limit,20),1);

        $data = Course::offset($offset)->limit($limit)->get();

        return new CourseResCollection($data);
    }
}
