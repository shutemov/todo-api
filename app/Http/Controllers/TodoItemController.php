<?php

namespace App\Http\Controllers;

use App\TodoItem;
use App\TodoList;
use Illuminate\Http\Request;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TodoList $todoList)
    {
        // TODO: add validation
        $title = $request->title;

        $todoItem = $todoList->items()->create([
            'title' => $title
        ]);

        return $todoItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function show(TodoItem $todoItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoItem $todoItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoItem $todoItem)
    {
        // TODO: add authorization
        $todoItem->update([
            'isDone' => true,
        ]);
        return response()->json('ok');
    }

    //TODO: сделано переименование элемента списка задач.
    /**
     * Rename the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function rename(Request $request, TodoItem $todoItem)
    {
        // TODO: add authorization
        $todoItem->update([
            'title' => $request -> title,
        ]);
        return response()->json('ok');
    }

    //TODO: сделано удаление элемента списка задач.
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoItem  $todoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoItem $todoItem)
    {
        // TODO: add authorization
        $todoItem->delete();
        return response()->json('ok');
    }
}
