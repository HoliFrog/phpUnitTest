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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'userController@edituser')->name('user');
Route::get('/userInfo', 'userController@userInfo')->name('userInfo')->middleware('auth');
//Route::get('user/edit/{id}','userController@edituser')->middleware('auth');
Route::put('update','userController@update' )->name('update');
Route::get('/projectCreation', 'projectController@create')->name('projectCreation')->middleware('auth');
Route::get('/Projects', 'projectController@index')->name('project');
Route::get('/projectDetails/{id}', 'projectController@show')->name('projectDetails');
Route::get('/projectEdition/{id}', 'projectController@edit')->name('projectEdition')->middleware('auth');
Route::put('/updateProject/{id}','projectController@update' )->name('updateProject');
Route::post('storeProject','projectController@store' )->name('storeProject')->middleware('auth');


