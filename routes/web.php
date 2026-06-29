<?php

use Illuminate\Support\Facades\Route;

// It redirects to home
Route::get('/', function () {
    return view('home', ['name' => 'John']);
})->name('home');

// It also redirects to home
Route::redirect('/home', '/');


Route::view('/about', 'about')->name('about');

Route::view('/contacts', 'contacts')->name('contacts');
