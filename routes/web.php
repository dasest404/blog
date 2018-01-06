<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//    USER ROUTES

Route::group(['namespace' => 'User'], function() {
    
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('post', 'PostController@index')->name('post');

});



//    ADMIN ROUTES

Route::group(['namespace' => 'Admin'], function() {
    
    Route::get('admin/home', "HomeController@index")->name('admin.home');
    
    //Post Routes
    Route::resource('admin/post', 'PostController');
    
    // Users Routes
    Route::resource('admin/user', 'UserController');
    
    //Tag Routes
    Route::resource('admin/tag', 'TagController');
    
    //Category Routes
    Route::resource('admin/category', 'CategoryController');

});











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
