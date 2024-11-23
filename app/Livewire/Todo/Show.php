<?php

namespace App\Livewire\Todo;

use App\Models\TodoItem;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['saved'];

    public function render()
    {
        $list = TodoItem::all();
        $todo = $list->filter(function ($task) {
            return $task->status == "todo";
        });
        $in_progress = $list->filter(function ($task) {
            return $task->status == "in-progress";
        });
        $done = $list->filter(function ($task) {
            return $task->status == "done";
        });

        return view('livewire.todo.show', [ 'todo' => $todo, 'in_progress' => $in_progress, 'done' => $done ]);
    }

    public function saved()
    {
        $this->render();
    }

    public function markAsDone(TodoItem $item)
    {
        $item->status = 'done';
        $item->save();
    }

    public function markAsToDo(TodoItem $item)
    {
        $item->status = 'to-do';
        $item->save();
    }

    public function deleteItem(TodoItem $item)
    {
        $item->delete();
    }
}


