<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return redirect()->route('pages.home.index');
})->name('pages.home.index');*/

Route::get('/', function () {
    if (auth()->check()) {
    return redirect()->route('pages::home.index', ['locale' => app()->getLocale()]);
} return redirect()->route('login');
});


Route::get('/login', function () {
    return redirect()->route('auth.login', ['locale' => app()->getLocale()]);
})->name('login');

Route::get('/{locale}/login', function () {
    return view('auth.login');
})->name('auth.login')->middleware('guest');


Route::get('/register', function () {
    return redirect()->route('auth.register', ['locale' => app()->getLocale()]);
})->name('register');

Route::get('/{locale}/register', function () {
    return view('auth.register');
})->name('auth.register')->middleware('guest');


Route::get('/forgot-password', function () {
    return redirect()->route('auth.forgot-password', ['locale' => app()->getLocale()]);
})->name('forgot-password');

Route::get('/{locale}/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password')->middleware('guest');



Route::get('/reset-password', function () {
    return redirect()->route('auth.reset-password', ['locale' => app()->getLocale()]);
})->name('auth.reset-password');


Route::get('/{locale}/reset-password/{token}', function () {
    return view('auth.reset-password');
})->name('reset-password')->middleware('guest');





/*Route::livewire('/', 'pages::home.index')->name('pages::home.index');*/


Route::get('/home', function () {
    return redirect()->route('pages::home.index', ['locale' => app()->getLocale()]);
});


Route::livewire('/{locale}/home', 'pages::home.index')->name('pages::home.index')->middleware([
    'auth'
]);


Route::livewire('/{locale}/exams/create', 'pages::exams.create')->name('pages::exams.create')->middleware('auth');

Route::livewire('/{locale}/exams/{jiri}/show', 'pages::exams.show')->name('pages::exams.show')->middleware('auth');

/*Route::livewire('/{locale}/dashboard', 'pages::dashboard.index')->name('pages::dashboard.index')->middleware('auth');*/

Route::livewire('/{locale}/dashboard/{jiri}/index', 'pages::dashboard.index')->name('pages::dashboard.index')->middleware([
    'auth'
]);



Route::livewire('/{locale}/evaluation/create', 'pages::evaluation.create')->name('pages::evaluation.create');

Route::livewire('/{locale}/evaluator', 'pages::evaluator.index')->name('pages::evaluator.index');


Route::livewire('/{locale}/profil', 'pages::profil.index')->name('pages::profil.index')->middleware([
    'auth',
]);

Route::livewire('/{locale}/profil/{profil}/edit', 'pages::profil.edit')->name('pages::profil.edit')->middleware([
    'auth',
]);

