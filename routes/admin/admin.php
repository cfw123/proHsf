<?php
/**
 * Created by PhpStorm.
 * User: 35066
 * Date: 2020/10/19
 * Time: 9:57
 */

// 后台管理
Route::group(['prefix' => 'cfw/814/admin', 'namespace' => 'Admin', 'middleware' => ['checklogin:admin.login']], function () {

    // 登录显示admin/login
    Route::get('login', 'LoginController@index')->name('admin.login');
    // 登录处理
    Route::post('login', 'LoginController@login')->name('admin.login');


    // 定义后台主页路由
    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::get('welcome', 'IndexController@welcome')->name('admin.welcome');
    // 用户退出
    Route::get('logout', 'IndexController@logout')->name('admin.logout');


    // 公用的方法
    // 图片上传
    Route::post('upfile', 'PublicController@upfile')->name('admin.upfile');


    Route::post('mupfile', 'PublicController@mupfile')->name('admin.mupfile');

    // 管理员列表管理
    // 列表
    Route::get('user/index', 'UserController@index')->name('admin.user.index');

    // 添加
    // 显示添加界面
    Route::get('user/add', 'UserController@add')->name('admin.user.add');
    // 添加的处理
    Route::post('user/add', 'UserController@addSave')->name('admin.user.add');

    // 修改
    // 修改的界面
    Route::get('user/edit/{id}', 'UserController@edit')->name('admin.user.edit')->where(['id' => '\d+']);
    // 修改的处理
    Route::put('user/edit/{id}', 'UserController@editSave')->name('admin.user.edit')->where(['id' => '\d+']);

    // 删除
    Route::delete('user/del/{user}', 'UserController@del')->name('admin.user.del');

    // ajax请求列表数据
    Route::get('user/list', 'UserController@list')->name('admin.user.list');

    // 给用户分配角色
    Route::get('user/role/{user}', 'UserController@role')->name('admin.user.role');

    // 角色路由
    // 资源路由
    Route::resource('role', 'RoleController', ['as' => 'admin']);
    // 给角色添加权限
    Route::post('addauth/{role}', 'RoleController@addauth')->name('admin.role.addauth');


    // 权限管理
    // 资源路由
    Route::resource('permission', 'PermissionController', ['as' => 'admin']);

    // 课程管理
    Route::resource('course', 'CourseController', ['as' => 'admin']);


    // 课时管理
    Route::resource('lesson','LessonController',['as'=>'admin']);






    // 案例管理
    Route::resource('product', 'hsfs\ProductController', ['as' => 'admin']);
    // 新闻管理
    Route::resource('new', 'hsfs\NewcontController', ['as' => 'admin']);







});
//Route::get('/test', function () {
//    session(['msg' => 'haha']);
//    return 111;
//});
//Route::get('/test1', function (\Illuminate\Http\Request $request) {
//    dump($request->session()->get('msg'));
//});