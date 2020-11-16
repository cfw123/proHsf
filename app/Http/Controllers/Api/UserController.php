<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResourceCollection;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // 起始位置
        $offset = $request->get('offset',0);
        // 获取的记录数
        $limit = $request->get('limit',20);
        $limit = max(min($limit,20),1);
        // 获取用户数据
        #$data['data'] = User::offset($offset)->limit($limit)->get(['id','username']);
        #$data = User::offset($offset)->limit($limit)->get();
        $data = User::offset($offset)->limit($limit)->get();

        // 调用
        return new UserResourceCollection($data);

        // 列表返回http 200
        #return response()->json($data);
    }
}
