<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Route::view('master-view','layouts.master');
Route::view('contact-page','contact');
Route::view('about-page','about');



