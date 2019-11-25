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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todos', 'TodoListController@index');
Route::get('todos/{todoList}', 'TodoListController@show');
Route::post('todos/{todoList}', 'TodoListController@update'); // TODO:
Route::post('todos/{todoList}/remove', 'TodoListController@destroy'); // TODO:

Route::post('todos/{todoList}/items', 'TodoItemController@store');
Route::post('items/{todoItem}', 'TodoItemController@update');
Route::post('items/{todoItem}/remove', 'TodoItemController@destroy');
