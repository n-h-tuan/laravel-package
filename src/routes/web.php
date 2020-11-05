<?php
Route::group(["namespace" => "Tuanhoang\Demopackage\Http\Controllers"], function(){
    Route::get('get-task', 'TaskController@index');
    Route::get('create-task', 'TaskController@create');
});
