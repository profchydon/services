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

Route::get('/', 'PagesController@welcome')->name('welcome');
Route::view('login' , 'login')->name('login');
Route::view('forgotpassword' , 'forgotpassword');
Route::view('signup/escort' , 'signupEscort')->name('escort_signup');
Route::view('signup/agency' , 'signupAgency')->name('agency_signup');
Route::view('signup/client' , 'signupClient')->name('client_signup');
Route::view('gofeature' , 'gofeature')->name('gofeature');
Route::view('account/upgrade' , 'upgrade')->name('upgrade');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'escort'], function () {
    Route::get('dashboard' , 'EscortController@dashboard')->name('escort_dashboard');
    Route::post('service-register' , 'EscortController@serviceRegister')->name('service_register');
    Route::post('service-update' , 'EscortController@serviceUpdate')->name('service_update');
    Route::post('gofeature/success' , 'EscortController@saveGoFeatureDetails');
    Route::view('verify-escort','verify-escort')->name('verify');

});


Route::view('imageview','imageview');
Route::post('image-view','EscortController@uploadImage');

Route::view('videoview','videoview');
Route::post('video-view','EscortController@uploadVideo');

Route::post('verify-escort','EscortController@uploadImageForVerification');


Route::get('escort/{escort}' , 'UserController@getEscort');
Route::get('escorts/vip' , 'UserController@getVIPEscorts');
Route::get('escorts' , 'UserController@getEscorts');
Route::get('escorts/{rank}/all' ,  'UserController@getEscortsByRank');
Route::get('activate/{email}' , 'UserController@getActivation');
Route::post('activation' , 'UserController@activation');
Route::get('sendmail' , 'UserController@sendActivationMail');
Route::post('login' , 'UserController@login');
