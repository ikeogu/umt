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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile', 'UserController@update_avatar');

//For the Admin Controller
Route::get('/admin', 'HomeController@admin')->middleware('admin');
Route::resource('/admin','AdminController');
Route::get('/admin_profile','AdminController@userprofile')->name('user');
Route::get('/admin','AdminController@index')->name('adminhome');
Route::get('/allmgtteam','AdminController@mgtteam')->name('allmgtteam');
Route::get('/allbod','AdminController@allbod')->name('allbod');
Route::get('/allmem','AdminController@user')->name('allmembers');

//
Route::resource('/bod','BoDController');
Route::resource('/users','UserController');

Route::resource('/mgtteam','MgtTeamController');
Route::resource('/project','ProjectController');
Route::resource('/gallery','GalleryController');
Route::resource('/research','ResearchController');
Route::resource('/training','TraningController');
Route::resource('/carearch','CaResearchController');



