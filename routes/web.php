<?php

use Illuminate\Support\Facades\Route;


//Auth
Route::get('/account/login', function () {
    return view('auth.sign-in');
})->name('sign-in');

Route::get('/account/register', function () {
    return view('auth.sign-up');
})->name('sign-up');

Route::get('/account/reset/password', function () {
    return view('auth.forgot-pwd');
})->name('forgot-pwd');

Route::get('/account/reset/new-password', function () {
    return view('auth.new-pwd');
})->name('new-password');

Route::get('/account/register/verification', function () {
    return view('auth.sign-up-verification');
})->name('sign-up-verification');

Route::get('/account/reset/verification', function () {
    return view('auth.forgot-pwd-verification');
})->name('forgot-pwd-verification');

Route::get('/account/alumni/verification', function () {
    return view('auth.alumni-verification');
})->name('alumni-verification');


//Client
Route::get('/home', function () {
    return view('client.home');
})->name('home');

Route::get('/about-us', function () {
    return view('client.about-us');
})->name('about-us');

Route::get('/announcement', function () {
    return view('client.announcement');
})->name('announcement');

Route::get('/tracer-study', function () {
    return view('client.tracer-study');
})->name('tracer-study');

Route::get('/your-post', function () {
    return view('client.your-post');
})->name('your-post');

Route::get('/network', function () {
    return view('client.network');
})->name('network');

Route::get('/officers', function () {
    return view('client.officers');
})->name('officers');

Route::get('account/settings', function () {
    return view('client.account-settings');
})->name('account-settings');

Route::get('/alumni-id', function () {
    return view('client.alumni-id');
})->name('alumni-id');

Route::get('/donate-us', function () {
    return view('client.donate-us');
})->name('donate-us');

Route::get('/help-center', function () {
    return view('client.help-center');
})->name('help-center');

Route::get('/questionnaire', function () {
    return view('client.survey-form');
})->name('questionnaire');

////////admin

Route::get('/admin/announcement', function () {
    return view('admin.content-announcement');
})->name('admin-announcement');

Route::get('/admin/pending-announcement', function () {
    return view('admin.content-pending-announcement');
})->name('admin-pending-announcement');

Route::get('/admin/sched-del-announcement', function () {
    return view('admin.content-scheduled-announcement');
})->name('admin-sched-del-announcement');

Route::get('/admin/analytics', function () {
    return view('admin.statsanalytics');
})->name('admin-statsanalytics');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');

Route::get('/admin/alumniaccount', function () {
    return view('admin.alumniaccount');
})->name('admin-alumniaccount');

Route::get('/admin/response', function () {
    return view('admin.response');
})->name('admin-response');

Route::get('/admin/questionnaire', function () {
    return view('admin.questionnaire');
})->name('admin-questionnaire');

Route::get('/admin/institute-program', function () {
    return view('admin.institute-program');
})->name('admin-institute-program');

Route::get('/admin/officers', function () {
    return view('admin.officers-admin');
})->name('admin-officers');
