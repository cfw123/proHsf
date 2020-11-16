<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\LessonRes;
use App\Http\Resources\LessonResCollection;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    // 课时列表
    public function index(Request $request) {
        // 起始位置
        $offset = $request->get('offset', 0);
        // 获取的记录数
        $limit = $request->get('limit', 20);
        $limit = max(min($limit, 20), 1);
        $id = $request->get('id');

        $data = (new Lesson())->leslist($id,$offset,$limit);
//        $data = Lesson::where('course_id', $id)->offset($offset)->limit($limit)->get();

        return new LessonResCollection($data);
    }

    // 根据ID返回相对应的数据
    public function show(Lesson $lesson) {
        // api resource方法
        return new LessonRes($lesson);
    }

    // 微信登录
    public function wxlogin(Request $request) {

//        return 111;
        // 小程序发送过来的
        $code = $request->get('code');
        // 此两个值是在小程序的后台得到的
        $appid = 'wx63df9008ace98946';
        $secrect = 'baa7ba0bcd25414b429ee5e9e1721534';

//        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code=JSCODE&grant_type=authorization_code';
        $url = 'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code';
        $url = sprintf($url,$appid,$secrect,$code);

        $json = http_request($url);

//        return 1;
        return $json;
    }

}
