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

//TODO: реализованы маршруты и методы переименования, удаления конкретного списка задач.
Route::get('todos', 'TodoListController@index');
Route::post('todos', 'TodoListController@store');
Route::get('todos/{todoList}', 'TodoListController@show');
Route::post('todos/{todoList}', 'TodoListController@update');
Route::post('todos/{todoList}/rename', 'TodoListController@rename');
Route::post('todos/{todoList}/remove', 'TodoListController@destroy');

//TODO: реализованы маршруты и методы переименования, удаления конкретной задачи в списке.
Route::post('todos/{todoList}/items', 'TodoItemController@store');
Route::post('items/{todoItem}', 'TodoItemController@update');
Route::post('items/{todoItem}/rename', 'TodoItemController@rename');
Route::post('items/{todoItem}/remove', 'TodoItemController@destroy');
