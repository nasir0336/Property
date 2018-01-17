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

 Route::get('/', 'NewController@home');


	Route::get('/house','NewController@houseList');
	Route::get('/land','NewController@landList2')->name('land');
	Route::get('/office','NewController@officeList');



//admin
 Route::get('/Admin/Land','NewController@landView')->name('landview');
 Route::post('/Admin/UpdateLand/{id}' ,'HomeController@updateLand')->name('UpdateLand');
 Route::post('/Admin/CreateLand' ,'HomeController@createLand')->name('CreateLand');
 Route::get('/Admin/AddLand', 'NewController@addLand')->name('addland');

 Route::get('/delete/{id}' ,'NewController@deleteRecord')->name('delete');
 Route::get('/Admin/UpdateLand/{id}' ,'NewController@updateRecord')->name('update');






 Route::get('/header','NewController@Header');
 Route::get('/permission',function () {



 });
 Route::get('/footer','NewController@Footer');
 Route::get('/master','NewController@Master');

 Route::get('/shope','NewController@shopeList')->name('shope');
 Route::get('/plaza','NewController@plazaList');
 Route::get('/contact','NewController@Contact');
 Route::get('/about','NewController@About');

 Route::get('/admin','NewController@admin');
 Route::get('/imagepath','NewController@imagePath')->name('image');

 //Route::get('/land','NewController@landList2');
 Route::get('/rules','NewController@ruleList');

 //Route::get('/update' ,'HomeController@updateRecord')->name('update');

 Auth::routes();

Route::get('fileUpload', function () {

	return view('fileUpload');

});
 Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'HomeController@fileUpload']);

 Route::get('/home', 'HomeController@index');

Route::get('/design', 'NewController@design')->name('design');
Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::get('/SearchCity/{city}','NewController@searchCity')->name('search_city');
Auth::routes();


