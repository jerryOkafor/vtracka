<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('/register','RegisterController@index');

//Route::get('dashboard','AdminController@index');
Route::post('submitFloor','AdminController@submitFloor');

Route::get('dashboard','AdminController@todayVisits');

Route::get('user/view','AdminController@userProfile');

Route::get('admin/view','AdminController@adminProfile');

Route::get('floor/add','AdminController@addFloor');

Route::get('visitor/history','AdminController@visitorHistory');

Route::get('about', 'AboutController@index');

Route::any('visitors/check', 'VisitorsController@check');

Route::post('visitor/visit/new', 'VisitorsController@newVisit');

Route::get('visitor/visit/out/{id}', 'VisitorsController@signOutView');

Route::post('visitor/visit/out', 'VisitorsController@signOut');

Route::post('visitor/visit/signUp', 'VisitorsController@signUp');

