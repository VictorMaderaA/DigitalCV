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


Route::get('my/templates', 'Views\UserResumeController@index')->name('my.resumes');
Route::get('my/templates/{idTemplate}/copy', 'Views\UserResumeController@copyTemplate')->name('my.resumes.copyTemplate');
Route::get('my/templates/{idResume}/edit', 'Views\UserResumeController@edit')->name('my.resumes.edit');
Route::put('my/templates/{idResume}', 'Views\UserResumeController@update')->name('my.resumes.update');
Route::delete('my/templates/{idResume}', 'Views\UserResumeController@delete')->name('my.resumes.destroy');
Route::get('my/media', 'Views\PaymentController')->name('my.media');
Route::get('my/profile', 'Views\PaymentController')->name('my.profile');

Route::get('profile/{userId}', 'Views\WelcomeController');
Route::get('profile/{userId}/resume', 'Views\WelcomeController');
Route::get('profile/{userId}/download', 'Views\WelcomeController');



