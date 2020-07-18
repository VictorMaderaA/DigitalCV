<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', 'Views\WelcomeController');
Route::get('home', 'Views\HomeController@index')->middleware(['auth', 'verified'])->name('home');
Route::get('payment', 'Views\PaymentController')->middleware(['auth', 'verified'])->name('payment.index');
Route::get('payment/subscribe/{identifier}', 'Views\PaymentController@addSubscription')->middleware(['auth', 'verified'])->name('payment.subscribe');
Route::get('payment/billing-portal', 'Views\PaymentController@billingPortal')->middleware(['auth', 'verified'])->name('payment.billingPortal');

Route::resource('templates', 'TemplateController')->middleware(['auth', 'verified']);
Route::get('templates/{templateId}/preview', 'TemplateController@preview')->name('templates.preview')->middleware(['auth', 'verified']);

Route::resource('templateViewHistories', 'TemplateViewHistoryController')->middleware(['auth', 'verified']);

Route::resource('users', 'UserController')->middleware(['auth', 'verified']);


Route::resource('resumes', 'ResumeController')->middleware(['auth', 'verified']);
Route::get('resumes/{resumeId}/preview', 'ResumeController@preview')->name('resumes.preview')->middleware(['auth', 'verified']);


Route::get('my/templates', 'Views\UserResumeController@index')->name('my.resumes')->middleware(['auth', 'verified']);
Route::get('my/templates/{idTemplate}/copy', 'Views\UserResumeController@copyTemplate')->name('my.resumes.copyTemplate')->middleware(['auth', 'verified']);
Route::get('my/templates/{idResume}/edit', 'Views\UserResumeController@edit')->name('my.resumes.edit')->middleware(['auth', 'verified']);
Route::put('my/templates/{idResume}', 'Views\UserResumeController@update')->name('my.resumes.update')->middleware(['auth', 'verified']);
Route::get('my/templates/{idResume}/download', 'Views\UserResumeController@downloadView')->name('my.resumes.download')->middleware(['auth', 'verified']);
Route::delete('my/templates/{idResume}', 'Views\UserResumeController@delete')->name('my.resumes.destroy')->middleware(['auth', 'verified']);
Route::get('my/media', 'Views\PaymentController')->name('my.media')->middleware(['auth', 'verified']);
Route::get('my/profile', 'Views\PaymentController')->name('my.profile')->middleware(['auth', 'verified']);

Route::get('profile/{userId}', 'Views\WelcomeController')->middleware(['auth', 'verified']);
Route::get('profile/{userId}/resume', 'Views\WelcomeController')->middleware(['auth', 'verified']);
Route::get('profile/{userId}/download', 'Views\WelcomeController')->middleware(['auth', 'verified']);



