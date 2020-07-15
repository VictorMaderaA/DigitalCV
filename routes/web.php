<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', 'Views\WelcomeController');
Route::get('/home', 'Views\HomeController@index')->middleware('verified');


Route::resource('templates', 'TemplateController');
Route::get('templates/{templateId}/preview', 'TemplateController@preview')->name('templates.preview');

Route::resource('templateViewHistories', 'TemplateViewHistoryController');

Route::resource('templateViewHistories', 'TemplateViewHistoryController');

Route::resource('users', 'UserController')->middleware('auth');


Route::resource('resumes', 'ResumeController');
