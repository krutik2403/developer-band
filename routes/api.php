<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/developers', 'API\DevelopersController@index')->name('developes-list');
Route::post('/send/contact/inquiry', 'API\DevelopersController@sendInquiry')->name('send-inquiry');
Route::get('/story', 'API\DevelopersController@story')->name('story');


Route::get('/bands', 'API\BandController@index')->name('bands');