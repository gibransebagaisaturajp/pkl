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

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    
        Route::resource('gallery', 'GalleryController');
        Route::resource('tag', 'TagController');
        Route::resource('kategori', 'KategoriController');
        Route::get('/home', 'HomeController@index')->name('home');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    
       Route::resource('gallery', 'GalleryController'); 
       Route::resource('tag', 'TagController');
       Route::resource('kategori', 'KategoriController');
       Route::get('/home', 'HomeController@index')->name('home');
});



Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/singleblog', function () {
    return view('frontend.singleblog');
});

Route::resource('/', 'FrontendController');

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/archive', function () {
    return view('frontend.archive');
});

Route::get('/category', function () {
    return view('frontend.category');
});
Route::get('/blog/{id}', 'FrontendController@ShowDetail');
Route::get('/blog-kategori/{kategori}', 'FrontController@blogkategori');