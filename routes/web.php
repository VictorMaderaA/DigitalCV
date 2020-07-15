<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', 'Views\WelcomeController');
Route::get('/home', 'Views\HomeController@index')->middleware('verified');


Route::resource('templates', 'TemplateController');

Route::resource('templateViewHistories', 'TemplateViewHistoryController');