<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//
//Route::get('users',function(){
////    return ['data'=>['id'=>1,'name'=>'张三'],'code'=>200 ];
//    return response()->json(['data'=>['id'=>1,'name'=>'张三'],'code'=>200]);
//});

// 标识 /api/版本号/地址
Route::group(['prefix'=>'v1','namespace'=>'Api'],function (){

    // 用户列表
    #Route::get('users','Api\UserController@index');
    Route::get('users','UserController@index');

    // 课程列表
    Route::get('courses','CourseController@index');

    // 课时列表
    Route::get('lessons','LessonController@index');

    // 根据ID来获取值
    Route::get('lessons/{lesson}','LessonController@show');

    // 小程序登录
    Route::get('wxlogin','LessonController@wxlogin');


    // 评论列表
    Route::get('comments/{lid}','CommentController@index');
    // 添加评论
    Route::post('comments','CommentController@store');
});