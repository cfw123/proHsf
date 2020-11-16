<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    // 后台主页
    public function index()
    {
        // 得到闪存并设置闪存给下一个http请求的页面使用
        session()->flash('msg', session('msg'));


        // ----------------- 权限菜单显示
        if (auth()->user()->username != 'admin') {  // 针对于没有所有的要权限的人
            $permissions = auth()->user()->role->auths();
        }else{
            // 所有的权限
            $permissions = new Permission();
        }
        $permissions = $permissions->where('is_menu', '1')->get()->toArray();
        $permissions = subTree($permissions);



        return view('admin.index.index', compact('permissions'));
    }

    // 欢迎页
    public function welcome()
    {
        return view('admin.index.welcome');
    }

    // 用户退出
    public function logout()
    {
        auth()->logout();
        return redirect(route('admin.login'))->with('msg', '请重新登录');
    }
}
