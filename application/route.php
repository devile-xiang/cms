<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;


//支持get请求
//Route::get('type','Index/index/type');
//Route::rule('type','Index/index/type','*');
//Route::get('type','Index/index/type');
//Route::post('type','Index/index/type');
//
//
//
//Route::rule('type','Index/index/type','put');
//Route::put('type','Index/index/type');
//
//
//Route::rule('type','Index/index/type','delete');
//Route::delete('type','Index/index/type');

//Route::rule([
////   "test"=>"index/index/test1",
////   "course/:id"=>"index/index/course"
////],'','get');
////
////Route::get([
////    "test"=>"index/index/test1",
////]);
////
//////使用配置文件批量注册
////return[
////    "test"=>"index/index/test1",
////   "course/:id"=>"index/index/course"
////
///

//Route::rule('course/:id','index/index/course','get',['method'=>'get','ext'=>'html'],['id'=>'\d+']);
//Route::resource('blog','Index/blog');
//声明快接路由
//Route::controller('blog','Index/blog');


//资源路由
    Route::resource('user','users');