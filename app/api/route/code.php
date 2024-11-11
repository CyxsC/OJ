<?php

use think\facade\Route;

Route::group('code', function () {
    Route::group(function () {
        Route::get('getTitle', 'code.Code/getTitle');
        Route::get('getTitleId', 'code.Code/getTitle?id');
        Route::post('runCode', 'code.Code/checkCode');
    });
});