<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome')->name('home');
Route::livewire('/hello', 'pages::hello')->name('hello');
Route::livewire('/counter', 'pages::counter')->name('counter');
Route::livewire('/todo', 'pages::todo')->name('todo');
