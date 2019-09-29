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
    return view('main/index');
});
Route::get('/uniquemappers', function () {
    return view('index');
})->name('local');
Route::get('/main_us', function () {
    return view('main/about');
})->name('main_us');

Route::get('/blog', function () {
    return view('main/blog');
})->name('blog');
Route::get('/single_post', function () {
    return view('main/blog/show');
})->name('single');

Route::get('/board', function () {
    return view('main/trustees');
})->name('board');
Route::get('/what_we_offer', function () {
    return view('main/offer');
})->name('offer');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile', 'UserController@update_avatar');

Route::resource('contact', 'ContactController');
//For the Admin Controller
Route::get('/admin', 'HomeController@admin')->middleware('admin');
Route::resource('/admin','AdminController');
Route::get('/admin_profile','AdminController@userprofile')->name('user');
Route::get('/admin','AdminController@index')->name('adminhome');
Route::get('/allmgtteam','AdminController@mgtteam')->name('allmgtteam');
Route::get('/allbod','AdminController@allbod')->name('allbod');
Route::get('/allmem','AdminController@user')->name('allmembers');
Route::get('/allproject','AdminController@project')->name('allpro');
Route::get('/allattend','AdminController@allAttend')->name('allattend');
Route::get('/allimages','AdminController@allimage')->name('allimage');
Route::get('/allres','AdminController@allres')->name('allres');
Route::get('/makeModerator/{key}/edit','UserController@moderator');
Route::get('allblog','BlogController@index2')->name('allblog');

//
Route::resource('bod','BoDController');
Route::resource('users','UserController');
Route::resource('blog', 'BlogController');
    
Route::resource('mgtteam','MgtTeamController');
Route::resource('project','ProjectController');
Route::resource('gallery','GalleryController');
Route::resource('research','ResearchController');
Route::resource('training','TraningController');
Route::resource('carearch','CaResearchController');
Route::resource('attend', 'AttendanceController');
Route::resource('attendee','AttendeeController');
Route::resource('minute','MinuteController');
Route::get('/allminute','MinuteController@index2')->name('minute.index2');
//payment
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 

