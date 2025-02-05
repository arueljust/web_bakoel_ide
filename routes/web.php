<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home')->middleware('translate');

Route::get('/about', function () {
    return view('about.index');
})->name('about')->middleware('translate');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog')->middleware('translate');

Route::get('/services', function () {
    return view('service.index');
})->name('services')->middleware('translate');

Route::get('/webinar', function () {
    return view('webinar.index');
})->name('webinar')->middleware('translate');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact')->middleware('translate');

Route::get('/products', function () {
    return view('product.index');
})->name('product')->middleware('translate');

Route::get('/templates', function () {
    return view('template.index');
})->name('template')->middleware('translate');

Route::get('/blog/article/1', function () {
    return view('article.index1');
})->name('article1')->middleware('translate');

Route::get('/blog/article/2', function () {
    return view('article.index2');
})->name('article2')->middleware('translate');

Route::get('/user-dashboard', function () {
    return view('user-dashboard.dashboard');
})->name('user-dashboard')->middleware('translate');

Route::get('/blank-page', function () {
    return view('blank-page.index');
})->name('blank-page')->middleware('translate');
