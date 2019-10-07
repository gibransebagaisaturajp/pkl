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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:Admin']], function () {
    
       Route::resource('gallery', 'GalleryController'); 
       Route::resource('tag', 'TagController');
       Route::resource('kategori', 'KategoriController');
});
 Route::resource('gallery', 'GalleryController');
 Route::resource('tag', 'TagController');
 Route::resource('kategori', 'KategoriController');


Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');