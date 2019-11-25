<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $guarded = [];

    public function list()
    {
        return $this->belongsTo(TodoList::class, 'todo_list_id');
    }
}
