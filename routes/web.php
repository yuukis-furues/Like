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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::post('/signin',[
    'uses' => 'HomeController@postSignin',
    'as' => 'user.signin'
]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');


Route::get('/site', 'HomeController@getsite');
Route::get('/about', 'HomeController@getabout');
Route::get('/study', 'HomeController@getstudy');
Route::get('/search', 'HomeController@index');
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/posts', 'PostsController@index');
// Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
