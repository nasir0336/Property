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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){

	Route::get('/house','NewController@houseList');
	Route::get('/land','NewController@landList2')->name('land');
	Route::get('/office','NewController@officeList');
});

//Route::get('/my/file','NewController@view');
//Route::get('/new/template','NewController@Template');
 Route::get('/header','NewController@Header');
 Route::get('/footer','NewController@Footer');
 Route::get('/master','NewController@Master');

 Route::get('/shope','NewController@shopeList')->name('shope');
 Route::get('/plaza','NewController@plazaList');
 Route::get('/contact','NewController@Contact');
 Route::get('/about','NewController@About');
 Route::get('/home','NewController@Home');
 Route::get('/admin','NewController@admin');

 //Route::get('/land','NewController@landList2');
 Route::get('/rules','NewController@ruleList');
 Route::get('/delete/{id}' ,'NewController@deleteRecord')->name('delete');
 Route::post('/landlist','HomeController@store')->name('record');
 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/home/1', 'HomeController@home');
