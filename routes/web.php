<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts-page');

Route::post('/contacts/submit', 'ContactsController@submit')->name('contacts-form');