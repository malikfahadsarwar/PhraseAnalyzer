<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function ()
{
    return view('customer');
})->name('home');




Route::post("analyzer_store","App\Http\Controllers\AnalyzerController@analyzer")->name("analyzerstore");



