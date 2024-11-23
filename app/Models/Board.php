<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // A Board has many Tasks
    public function todo_item()
    {
        return $this->hasMany(TodoItem::class, 'board_id', 'id');
    }

    public function tasksByStatus($status)
    {
        return $this->todo_item()->where('status', $status);
    }
}
