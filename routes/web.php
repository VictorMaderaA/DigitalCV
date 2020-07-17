<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', 'Views\WelcomeController');
Route::get('/home', 'Views\HomeController@index')->middleware('verified')->name('home');
Route::get('payment', 'Views\PaymentController')->middleware(['auth', 'verified'])->name('payment.index');
Route::get('payment/subscribe/{identifier}', 'Views\PaymentController@addSubscription')->middleware(['auth', 'verified'])->name('payment.subscribe');
Route::get('payment/billing-portal', 'Views\PaymentController@billingPortal')->middleware(['auth', 'verified'])->name('payment.billingPortal');

Route::resource('templates', 'TemplateController');
Route::get('templates/{templateId}/preview', 'TemplateController@preview')->name('templates.preview');

Route::resource('templateViewHistories', 'TemplateViewHistoryController');

Route::resource('users', 'UserController')->middleware('auth');


Route::resource('resumes', 'ResumeController');
Route::get('resumes/{resumeId}/preview', 'ResumeController@preview')->name('resumes.preview');


