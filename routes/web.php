<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/about', function () {
    return view('about.index');
})->name('about');
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog');
Route::get('/services', function () {
    return view('service.index');
})->name('services');
Route::get('/webinar', function () {
    return view('webinar.index');
})->name('webinar');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('new-design', function () {
    return view('new_design');
});
