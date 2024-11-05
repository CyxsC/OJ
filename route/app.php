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
use think\facade\Route;

// Route::get('think', function () {
//     return 'hello,ThinkPHP8';
// });

Route::get('hello/:name', 'index/hello');


Route::get('index', 'index/index');

// 标签列表
Route::get('link/list', 'link/list');
Route::post('link/input', 'link/input');
Route::post('link/del', 'link/del');

// 标签详情
Route::get('link/detail', 'link/detail');
Route::post('link/update', 'link/update');

// 标签分类
Route::get('link/category', 'link/category');
Route::post('link/category_input', 'link/category_input');
Route::post('link/category_del', 'link/category_del');