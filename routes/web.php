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
Route::get('/Project', function () {
    return view('project');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'userController@edituser')->name('user');
Route::get('/userInfo', 'userController@userInfo')->name('userInfo');
//Route::get('user/edit/{id}','userController@edituser')->middleware('auth');
Route::put('update','userController@update' )->name('update');
Route::get('/createProject', 'projectController@create')->name('createProject');

