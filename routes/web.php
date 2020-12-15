<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('video_chat', 'VideoChatController@index');
    Route::post('auth/video_chat', 'VideoChatController@auth');
    Route::get('/logout','HomeController@logout')->name('logout');
    Route::post('/edit-profile', 'HomeController@editProfile');
    Route::post('/upload-image', 'HomeController@uploadImage');
    Route::post('/send-feedback', 'HomeController@sendFeedback');
    Route::get('/account-settings', 'HomeController@accountSettings');
  });
