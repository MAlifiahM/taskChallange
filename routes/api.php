<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:api'], function(){

    /** Post Route */
    Route::get('/posts', 'PostController@index');
    Route::post('/posts/create', 'PostController@store');
    Route::put('/posts/{id}', 'PostController@updateAllDatas');
    Route::patch('/posts/{id}', 'PostController@updateSingleData');
    Route::delete('/posts/{id}', 'PostController@destroy');
    
    /** User Route */
    Route::get('/users', 'UserController@index');
    Route::put('/users/{id}', 'UserController@updateAllDatas');
    Route::patch('/users/{id}', 'UserController@updateSingleData');
    Route::delete('/users/{id}', 'UserController@destroy');
    
    /** Todo Route */
    Route::get('/todos', 'TodoController@index');
    Route::post('/todos/create', 'TodoController@store');
    Route::put('/todos/{id}', 'TodoController@updateAllDatas');
    Route::patch('/todos/{id}', 'TodoController@updateSingleData');
    Route::delete('/todos/{id}', 'TodoController@destroy');
    
    /** Comment Route */
    Route::get('/comments', 'CommentController@index');
    Route::post('/comments/create', 'CommentController@store');
    Route::put('/comments/{id}', 'CommentController@updateAllDatas');
    Route::patch('/comments/{id}', 'CommentController@updateSingleData');
    Route::delete('/comments/{id}', 'CommentController@destroy');
    
    /** Album Route */
    Route::get('/albums', 'AlbumController@index');
    Route::post('/albums/create', 'AlbumController@store');
    Route::put('/albums/{id}', 'AlbumController@updateAllDatas');
    Route::patch('/albums/{id}', 'AlbumController@updateSingleData');
    Route::delete('/albums/{id}', 'AlbumController@destroy');
    
    /** Photo Route */
    Route::get('/photos', 'PhotoController@index');
    Route::post('/photos/create', 'PhotoController@store');
    Route::put('/photos/{id}', 'PhotoController@updateAllDatas');
    Route::patch('/photos/{id}', 'PhotoController@updateSingleData');
    Route::delete('/photos/{id}', 'PhotoController@destroy');
});

Route::post('/users/register', 'UserController@store');