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
Route::get('about', function () {
    echo "O boy, will not forget to put the about page here";
});

Route::post('visitors/check', 'VisitorsController@check');

Route::post('visitor/visit/new', 'VisitorsController@newVisit');

Route::get('visitor/visit/out/{id}', 'VisitorsController@signOutView');

Route::post('visitor/visit/out', 'VisitorsController@signOut');