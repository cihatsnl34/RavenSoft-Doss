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

require __DIR__ . '/auth.php';


Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('contactRequest', 'HomeController@contactRequest')->name('contactRequest');




//admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        //login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        
        Route::get('dashboard', 'HomeController@index')->name('dashboard');

        //Reference
        Route::get('reference', 'ReferanceController@index')->name('reference');
        Route::get('reference/add', 'ReferanceController@create')->name('reference_ad');
        Route::post('reference/add', 'ReferanceController@store')->name('reference_add');
        Route::get('reference/edit/{id}', 'ReferanceController@edit')->name('reference_edit');
        Route::post('reference/update/{id}', 'ReferanceController@update')->name('reference_update');
        Route::get('reference/delete/{id}', 'ReferanceController@destroy')->name('reference_destroy');
        //About
        Route::get('about', 'AboutController@index')->name('about');
        Route::get('about/add', 'AboutController@create')->name('about_ad');
        Route::post('about/add', 'AboutController@store')->name('about_add');
        Route::get('about/edit/{id}', 'AboutController@edit')->name('about_edit');
        Route::post('about/update/{id}', 'AboutController@update')->name('about_update');
        Route::get('about/delete/{id}', 'AboutController@destroy')->name('about_destroy');

        //Contact
        Route::get('contact', 'ConcactController@index')->name('contact');
        Route::get('contact/add', 'ConcactController@create')->name('contact_ad');
        Route::post('contact/add', 'ConcactController@store')->name('contact_add');
        Route::get('contact/edit/{id}', 'ConcactController@edit')->name('contact_edit');
        Route::post('contact/update/{id}', 'ConcactController@update')->name('contact_update');
        Route::get('contact/delete/{id}', 'ConcactController@destroy')->name('contact_destroy');

        //Message
        Route::get('message', 'MessageController@index')->name('message');
        Route::get('message/delete/{id}', 'MessageController@destroy')->name('message_destroy');
        Route::get('download/{id}', 'MessageController@download')->name('download');
        //Image
        Route::get('image', 'ImageController@index')->name('image');
        Route::get('image/add', 'ImageController@create')->name('image_ad');
        Route::post('image/add', 'ImageController@store')->name('image_add');
        Route::get('image/edit/{id}', 'ImageController@edit')->name('image_edit');
        Route::post('image/update/{id}', 'ImageController@update')->name('image_update');
        Route::get('image/delete/{id}', 'ImageController@destroy')->name('image_destroy');
        

    });
    Route::get('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
