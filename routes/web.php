<?php

Route::group(['prefix' => 'management', 'namespace' => 'Management'], function () {
    Route::resource('dashboards', 'DashboardController', ['only' => ['index']]);
});

Route::get('test', function () {
    return 'Run project successful!!!';
});
