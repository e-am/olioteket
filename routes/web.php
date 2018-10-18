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



//Posts

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
/*
GET /posts
GET /posts/create
POST /posts
GET /posts/{id}/edit
PATCH /posts/{id}
DELETE /posts/{id}

*/
Route::resource('posts', 'PostsController');

Route::post('/posts/{post}/comments', 'CommentsController@store');

	
Route::get('/posts/{id}', 'PostsController@show')->name('show-posts');

Route::resource('comments', 'CommentsController');