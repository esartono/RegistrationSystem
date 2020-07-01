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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return redirect('/');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['index']]);
	Route::resource('feedback', 'FeedbackController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


Route::group(['middleware' => 'admin'], function () {
	Route::get('user', ['as' => 'user.index', 'uses' => 'UserController@index']);
	Route::get('verify/{id}', ['as' => 'user.verify', 'uses' => 'UserController@verify']);
	Route::get('users', ['as' => 'users', 'uses' => 'UserController@userslist']);
});
