<?php

use Illuminate\Support\Facades\Auth;
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
    return view('backend.dashboard');
});
Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/service', function () {
    return view('frontend.service');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/banner', 'App\Http\Controllers\BannerController');
Route::get('/admin/banner','App\Http\Controllers\BannerController@index')->name('banner');
Route::get('/admin/banner/{id}/{catsts}','App\Http\Controllers\BannerController@bannerstatus')->name('banner-status');
Route::post('/admin/banner/add','App\Http\Controllers\BannerController@store')->name('banner-add');
Route::delete('/admin/banner/delete/{id}','App\Http\Controllers\BannerController@destroy')->name('banner-delete');

Route::resource('/admin/information', 'App\Http\Controllers\InformationController');
Route::get('/admin/information','App\Http\Controllers\InformationController@index')->name('information');
Route::post('/admin/information/add','App\Http\Controllers\InformationController@store')->name('information-add');
Route::delete('/admin/information/delete/{id}','App\Http\Controllers\InformationController@destroy')->name('information-delete');

Route::resource('/admin/service', 'App\Http\Controllers\ServiceController');
Route::get('/admin/service','App\Http\Controllers\ServiceController@index')->name('service');
Route::post('/admin/service/add','App\Http\Controllers\ServiceController@store')->name('service-add');