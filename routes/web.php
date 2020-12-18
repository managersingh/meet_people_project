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
    Route::get('/video_chat/{id}', 'VideoChatController@index');
    Route::post('auth/video_chat', 'VideoChatController@auth');
    Route::get('/logout','HomeController@logout')->name('logout');
    Route::post('/edit-profile', 'HomeController@editProfile');
    Route::post('/upload-image', 'HomeController@uploadImage');
    Route::post('/send-feedback', 'HomeController@sendFeedback');
    Route::get('/account-settings', 'HomeController@accountSettings');
    Route::any('/add-event', 'EventController@AddEvent');
    Route::any('/manage-event/{id}', 'EventController@manageEvent')->name('manage-event');
    Route::any('/overview/{id}', 'EventController@overviewEvent');
    Route::post('/get-ticket-for-yourself', 'EventController@getTicketForYourself');
    Route::any('/check-in/{id}', 'EventController@checkInEvent');
    Route::any('/check-in/webcam/{id}', 'VideoChatController@checkInWebcam');

	Route::any('/add-event', 'EventController@AddEvent');
	Route::any('/list-event', 'EventController@EventShow');
  });
