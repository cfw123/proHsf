<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
use Illuminate\Support\Facades\Hash;

//Route::get('/test', function () {
//    return Hash::make('cfw123');
////    return decrypt('$2y$10$cNTqhHOD.c42wOTbLuPszuiOGGuMp4n8W2BB.hEKhra7xajEKngjm');
//});

//Route::get('test', 'TestController@index');
//Route::get('test1', 'TestController@show');


include base_path('routes/admin/admin.php');
include base_path('routes/home/index.php');
