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



Auth::routes();
Route::resource('/', 'App\Http\Controllers\FrontpageController');
Route::get('/','App\Http\Controllers\FrontpageController@homepage');
Route::get('/home','App\Http\Controllers\FrontpageController@homepage');
Route::get('/service','App\Http\Controllers\FrontpageController@service');
Route::get('/allrepairservice/{id}/{slug}','App\Http\Controllers\FrontpageController@single_service_view');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resource('/admin/banner', 'App\Http\Controllers\BannerController');
Route::get('/admin/banner','App\Http\Controllers\BannerController@index')->name('banner');
//Route::get('/admin/banner/edit/{id}','App\Http\Controllers\BannerController@edit')->name('banner.edit');
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
Route::get('/admin/service/edit/{service}','App\Http\Controllers\ServiceController@edit')->name('service.edit');
Route::put('/admin/service/edit/{service}','App\Http\Controllers\ServiceController@update')->name('service.update');
Route::get('/admin/service/{id}/{catsts}','App\Http\Controllers\ServiceController@servicestatus')->name('service-status');
Route::delete('/admin/service/delete/{id}','App\Http\Controllers\ServiceController@destroy');

Route::resource('/admin/brand', 'App\Http\Controllers\BrandController');
Route::get('/admin/brand','App\Http\Controllers\BrandController@index')->name('brand');
Route::post('/admin/brand/add','App\Http\Controllers\BrandController@store')->name('brand-add');
Route::delete('/admin/brand/delete/{id}','App\Http\Controllers\BrandController@destroy');
Route::get('/admin/brand/edit/{id}','App\Http\Controllers\BrandController@edit')->name('brand.edit');
Route::put('/admin/brand/edit/{id}','App\Http\Controllers\BrandController@update');

Route::resource('/admin/product', 'App\Http\Controllers\ProductController');
Route::get('/admin/product', 'App\Http\Controllers\ProductController@index')->name('product');
Route::post('/admin/product/add','App\Http\Controllers\ProductController@store')->name('product-add');
