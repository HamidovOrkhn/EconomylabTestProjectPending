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

Route::get('/','SiteController@index');
Route::post('/sendmes','SiteController@sendmessage');
Route::get('/dunyagundemi','SiteController@dunyagundemi');
Route::get('/olkeiqtisadiyyati','SiteController@olkeiqtisadiyyati');
Route::get('/trendler','SiteController@trendler');
Route::get('/iqtisadianaliz','SiteController@iqtisadianaliz');
Route::get('/sahibkarliq','SiteController@sahibkarliq');
Route::get('/meqaleler','SiteController@meqaleler');
Route::get('/ecosozluk','SiteController@ecosozluk');
Route::get('/meqale{name}','SiteController@showArticle');











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register',function(){
	return view('errorpg');
});
Route::get('/home/admin', 'HomeController@index1');
Route::get('/home/table','HomeController@index2');
Route::get('/home/gettabledata','HomeController@getTableData');
Route::get('/home/table/getupdate/{id}','HomeController@getUpdate');
Route::post('/home/table/setupdate','HomeController@setUpdate');
Route::get('/home/table/deletearticle/{id}','HomeController@deleteArticle');
Route::post('/home/addarticle', 'HomeController@addArticle');
Route::get('/home/table/deletemessage','HomeController@deleteMessage');
