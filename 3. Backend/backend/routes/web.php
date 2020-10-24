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

Route::get('/', 'FrontController@index'); //首頁
Route::get('/whats_on', 'FrontController@whats_on'); //新聞頁
Route::get('/whats_on_en', 'FrontController@whats_on_en'); //新聞頁

Route::get('/test', 'FrontController@booking');

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


Route::prefix('admin')->middleware(['auth'])->group(function () {

    // news_ch後台
    Route::get('/news_ch', 'NewsChController@index');
    Route::get('/news_ch/create', 'NewsChController@create');
    Route::post('/news_ch/store', 'NewsChController@store');
    Route::get('/news_ch/edit/{news_ch_id}', 'NewsChController@edit');
    Route::post('/news_ch/update/{news_ch_id}', 'NewsChController@update');
    Route::get('/news_ch/destroy/{news_ch_id}', 'NewsChController@destroy');

    // news_ch後台
    Route::get('/news_en', 'news_enController@index');
    Route::get('/news_en/create', 'news_enController@create');
    Route::post('/news_en/store', 'news_enController@store');
    Route::get('/news_en/edit/{news_ch_id}', 'news_enController@edit');
    Route::post('/news_en/update/{news_ch_id}', 'news_enController@update');
    Route::get('/news_en/destroy/{news_ch_id}', 'news_enController@destroy');

    // events_ch後台
    Route::get('/events_ch', 'events_chController@index');
    Route::get('/events_ch/create', 'events_chController@create');
    Route::post('/events_ch/store', 'events_chController@store');
    Route::get('/events_ch/edit/{events_ch_id}', 'events_chController@edit');
    Route::post('/events_ch/update/{events_ch_id}', 'events_chController@update');
    Route::get('/events_ch/destroy/{events_ch_id}', 'events_chController@destroy');
});
