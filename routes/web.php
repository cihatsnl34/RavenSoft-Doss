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


Route::get('/', function () {
    return view('home');
});



Route::get('/admin', function () {
    return redirect('/admin/login');
});


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
        Route::post('reference/delete/{id}', 'ReferanceController@destroy')->name('reference_destroy');
        //About
        Route::get('about', 'AboutController@index')->name('about');
        Route::get('about/add', 'AboutController@create')->name('about_ad');
        Route::post('about/add', 'AboutController@store')->name('about_add');

        

        Route::get('about', function () {
            return view('admin.About.about');
        })->name('about');
        Route::get('references', function () {
            return view('admin.dashboard');
        })->name('uyeler');
        Route::get('resource', function () {
            return view('admin.resource');
        })->name('resource');
        Route::get('teklifler', function () {
            return view('admin.pages.teklifle');
        })->name('teklifler');
        Route::get('acik-arttirma', function () {
            return view('admin.pages.acik-art');
        })->name('acik-arttirma');
        Route::get('kalanlar', function () {
            return view('admin.pages.kalanlar');
        })->name('kalanlar');
        Route::get('kayitlar', function () {
            return view('admin.pages.kayitlar');
        })->name('kayitlar');
        Route::get('ayarlar', function () {
            return view('admin.pages.ayarlar');
        })->name('ayarlar');
        

    });
    Route::get('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
