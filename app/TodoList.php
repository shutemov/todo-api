<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(TodoItem::class);
    }
}
