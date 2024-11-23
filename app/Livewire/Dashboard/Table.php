<?php

namespace App\Livewire\Dashboard;

use App\Models\Board;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Table extends Component
{
    protected $listeners = ['saved'];
    public $boards;

    public function render()
    {
        $this->boards = Board::withCount([
            'todo_item as tasks_todo' => function ($query) {
                $query->where('status', 'todo');
            },
            'todo_item as tasks_in_progress' => function ($query) {
                $query->where('status', 'in-progress');
            },
            'todo_item as tasks_done' => function ($query) {
                $query->where('status', 'done');
            },
        ])->where('user_id', auth()->id())->get();
        return view('livewire.dashboard.table');
    }

    public function deleteItem(Board $item)
    {
        $item->delete();
    }
}
