<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 列表页 列表页有搜索
    public function index(Request $request)
    {
        // 日期初始化
        $dateData = ['datemin' => date('Y-m-d'), 'datemax' => date('Y-m-d')];
        return view('admin.user.index', $dateData);
    }

    // ajax请求
    public function list(Request $request)
    {
        return (new User())->search($request, 'username');
    }

    // 给用户分配角色
    public function role(User $user)
    {
        // 读取全部的角色
        $roles = Role::get();
        return view('admin.user.role', compact('user', 'roles'));
    }

    // 添加显示
    public function add()
    {

    }

    // 添加处理
    public function addSave(Request $request)
    {

    }

    // 修改显示
    public function edit(Request $request, int $id)
    {

    }

    // 修改的处理
    public function editSave(Request $request, int $id)
    {

    }

    // 删除                             隐式传参
    public function del(Request $request, User $user)
    {
        // 删除
        $user->delete();
        return ['status' => 0, 'msg' => '删除成功'];
    }
}
