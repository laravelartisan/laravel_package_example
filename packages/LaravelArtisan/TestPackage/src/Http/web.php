<?php



Route::get('/test',  'LaravelArtisan\TestPackage\Http\Controllers\TestController@test');
Route::get('/test-create',  'LaravelArtisan\TestPackage\Http\Controllers\TestController@createTest');
