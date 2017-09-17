<?php

// Front end pages
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/posts', 'HomeController@posts')->name('posts');
Route::get('/posts/{post}', 'HomeController@post')->name('post');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Route redirecting back to login
Route::get('register', function () {return redirect()->route('login');});

// Admin routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {

    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('/posts', 'PostsController');
    Route::resource('/pages', 'PagesController');
    Route::resource('/menus', 'MenusController');

});
