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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// New routes for user functions

Route::get('/', function () {
    return view('user.index');
});

Route::get('/user_show_gallery', 'GalleryController@user_show_gallery')->name('user_show_gallery');
Route::get('/user_show_newsfeed', 'NewsfeedController@user_show_newsfeed')->name('user_newsfeed');
Route::get('/user_show_public', 'PublicController@user_show_public')->name('user_show_public');
Route::get('/user_search_bus', 'BusController@user_search_bus')->name('user_search_bus');






