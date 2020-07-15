<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', 'Views\WelcomeController');

Route::get('/profile', 'Views\ProfileCvController');
Route::post('/cv-form', 'Views\ProfileCvController@form');

Route::get('preview-template/{template_id}', 'Views\TemplatePreviewController');

Route::get('/home', 'Views\HomeController@index')->name('home');
