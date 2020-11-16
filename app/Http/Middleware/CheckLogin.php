<?php

namespace App\Http\Middleware;

use App\Exceptions\AuthException;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $params)
    {


        $currentRouteName = $request->route()->getName();
        // 检查用户是否登录
        if ($currentRouteName != $params) {

            //  ------------------------ 权限判断区域
            // 获取当前用户有的权限
            $permissions = array_column(auth()->user()->role->auths->toArray(), 'routename');
            // 添加一些不用验证的权限  合并
//            dump($permissions);
            $permissions = array_merge($permissions, config('permission'));
//            dump($permissions);

            /*$permissions[] = 'admin.index';
            $permissions[] = 'admin.welcome';
            $permissions[] = 'admin.logout';*/

            // 判断你没有权限，但是一定要对超管要有所有的权限
            if (auth()->user()->username != 'admin' && !in_array($currentRouteName, $permissions)) {
                throw new AuthException('我就是一个错误');
            }


            if (!auth()->check()) {
                // 清空session
                session()->flush();
                // 跳转登录页面
                return redirect(route('admin.login'))->withErrors(['errors' => '请登录']);
            }
        }
        // $next($request)  Response对象
        return $next($request);
    }
}
