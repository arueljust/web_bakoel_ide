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

Route::get('/products', function () {
    return view('product.index');
})->name('product');

Route::get('/templates', function () {
    return view('template.index');
})->name('template');

Route::get('/blog/article/1', function () {
    return view('article.index1');
})->name('article1');

Route::get('/blog/article/2', function () {
    return view('article.index2');
})->name('article2');

Route::get('/user-dashboard', function () {
    return view('user-dashboard.dashboard');
})->name('user-dashboard');

Route::get('/blank-page', function () {
    return view('blank-page.index');
})->name('blank-page');
