<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return redirect()->route('pages.home.index');
})->name('pages.home.index');*/


Route::livewire('/', 'pages::home.index')->name('pages::home.index');

Route::livewire('/exams/create', 'pages::exams.create')->name('pages::exams.create');

Route::livewire('/exams/show', 'pages::exams.show')->name('pages::exams.show');

Route::livewire('/dashboard', 'pages::dashboard.index')->name('pages::dashboard.index');

Route::livewire('/evaluation/create', 'pages::evaluation.create')->name('pages::evaluation.create');

Route::livewire('/evaluator', 'pages::evaluator.index')->name('pages::evaluator.index');

