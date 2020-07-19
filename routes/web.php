<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', 'Views\WelcomeController');
Route::get('home', 'Views\HomeController@index')->middleware(['auth', 'verified'])->name('home');


Route::resource('templates', 'TemplateController')->middleware(['auth', 'verified']);
Route::resource('templateViewHistories', 'TemplateViewHistoryController')->middleware(['auth', 'verified']);
Route::resource('users', 'UserController')->middleware(['auth', 'verified']);
Route::resource('resumes', 'ResumeController')->middleware(['auth', 'verified']);

Route::get('resumes/{resumeId}/preview', 'ResumeController@preview')->name('resumes.preview');
Route::get('templates/{templateId}/preview', 'TemplateController@preview')->name('templates.preview');


Route::get('payment', 'Views\PaymentController')->middleware(['auth', 'verified'])->name('payment.index');
Route::get('payment/subscribe/{identifier}', 'Views\PaymentController@addSubscription')->middleware(['auth', 'verified'])->name('payment.subscribe');
Route::get('payment/billing-portal', 'Views\PaymentController@billingPortal')->middleware(['auth', 'verified'])->name('payment.billingPortal');


Route::get('my/templates', 'Views\UserResumeController@index')->name('my.resumes')->middleware(['auth', 'verified']);
Route::get('my/templates/{idTemplate}/copy', 'Views\UserResumeController@copyTemplate')->name('my.resumes.copyTemplate')->middleware(['auth', 'verified']);
Route::get('my/templates/{idResume}/edit', 'Views\UserResumeController@edit')->name('my.resumes.edit')->middleware(['auth', 'verified']);
Route::put('my/templates/{idResume}', 'Views\UserResumeController@update')->name('my.resumes.update')->middleware(['auth', 'verified']);
Route::get('my/templates/{idResume}/download', 'Views\UserResumeController@downloadView')->name('my.resumes.download')->middleware(['auth', 'verified']);
Route::delete('my/templates/{idResume}', 'Views\UserResumeController@delete')->name('my.resumes.destroy')->middleware(['auth', 'verified']);

Route::get('my/files', 'Views\UserFileController@index')->name('my.files')->middleware(['auth', 'verified']);
Route::get('my/files/{idFile}', 'Views\UserFileController@show')->name('my.files.show')->middleware(['auth', 'verified']);
Route::get('my/files/create', 'Views\UserFileController@create')->name('my.files.create')->middleware(['auth', 'verified']);
Route::post('my/files', 'Views\UserFileController@store')->name('my.files.store')->middleware(['auth', 'verified']);

Route::get('my/profile', 'Views\PaymentController')->name('my.profile')->middleware(['auth', 'verified']);


Route::get('profile/{userId}', 'Views\ProfileController@index')->middleware(['auth', 'verified']);
Route::get('profile/{userId}/file/{fileId}', 'Views\ProfileController@getFile')->name('profile.file');
Route::get('profile/{userId}/resume', 'Views\ProfileController@index')->middleware(['auth', 'verified']);
Route::get('profile/{userId}/download', 'Views\ProfileController@index')->middleware(['auth', 'verified']);





Route::resource('files', 'FileController');
