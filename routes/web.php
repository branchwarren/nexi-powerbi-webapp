<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/q', 'App\Http\Controllers\SampleController@logIPthruQ');
Route::get('/s3', 'App\Http\Controllers\SampleController@createInS3');
Route::get('/rds', 'App\Http\Controllers\SampleController@createInRDS');
