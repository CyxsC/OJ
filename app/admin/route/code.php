<?php

use think\facade\Route;
use app\admin\middleware\AdminTokenMiddle;

Route::group('code', function () {
    //题库管理
    Route::group(function () {
        Route::get('getTitle', 'code.Code/getTitle');
        Route::get('getTitleId', 'code.Code/getTitleId');
        Route::post('runCode', 'code.Code/CheckCode');
    });
})->middleware(AdminTokenMiddle::class);