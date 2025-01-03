<?php

use think\facade\Route;
use app\admin\middleware\AdminTokenMiddle;

Route::group('admin', function () {
    // 登录
    Route::group(function () {
        Route::post('sign', 'admin.Admin/sign');
    });

    // 注销
    Route::group(function () {
        Route::get('signUp', 'admin.Admin/signUp');
    })->middleware(AdminTokenMiddle::class);

    // 管理员管理
    Route::group(function () {
        Route::post('adminList', 'admin.Admin/list');
        Route::get('adminAdd', 'admin.Admin/add');
        Route::get('adminEdit', 'admin.Admin/edit');
        Route::get('adminDel', 'admin.Admin/delete');
    })->option(['type' => 'admin', 'model' => '管理员管理'])->middleware(AdminTokenMiddle::class);
});