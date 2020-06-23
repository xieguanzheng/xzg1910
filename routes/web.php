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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info',function(){
    phpinfo();
});
Route::get('/goods/detail','Goods\GoodsController@detail');
//测试Redis
Route::get('/test/redis1','TestController@redis1');
//登录
Route::get('/user/reg','User\UserController@reg');//注册页面
Route::post('/user/regdo','User\UserController@regdo');//注册

Route::get('/user/login','User\UserController@login');//登录页面
Route::post('/user/logindo','User\UserController@logindo');//登录
