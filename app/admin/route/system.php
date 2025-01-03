<?php

use think\facade\Route;

Route::group('system', function () {
    // 系统管理
    Route::group(function () {
        Route::get('form', 'system.System/form');
    });

    // 后台菜单管理
    Route::group(function () {
        Route::get('menu', 'system.SystemMenu/list'); //列表
        Route::post('del', 'system.SystemMenu/delete'); //删除
        Route::post('save', 'system.SystemMenu/save'); //保存或更新
    });

    // log管理
    Route::group(function () {
        // Route::get('menu', 'system.SystemMenu/list');
        // Route::post('del', 'system.SystemMenu/delete');
        // Route::get('save', 'system.system/save');
    });

    // 配置管理
    Route::group(function () {
        // Route::get('menu', 'system.SystemMenu/list');
        // Route::post('del', 'system.SystemMenu/delete');
        // Route::get('save', 'system.system/save');
    });
    // ->option(['type' => 'system', 'model' => '系统管理']);
});