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

Route::get('/', function () {
    return view('partials.content-test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile','UserController@profile')->middleware('auth');

Route::get('/project/create','ProjectController@create')->middleware('auth');
Route::post('/project/create','ProjectController@store')->middleware('auth');
Route::get('/project/category','ProjectController@createcategory')->middleware('auth');
Route::post('/project/category','ProjectController@storecategory')->middleware('auth');
Route::get('/project/subcategory','ProjectController@createsubcategory')->middleware('auth');
Route::post('/project/subcategory','ProjectController@storesubcategory')->middleware('auth');
Route::get('/project/data','ProjectController@createdata')->middleware('auth');
Route::post('/project/data','ProjectController@storedata')->middleware('auth');

Route::get('/profile/projects','ProjectController@showmine')->middleware('auth');
