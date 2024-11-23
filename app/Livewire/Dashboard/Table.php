<?php

namespace App\Livewire\Dashboard;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Board;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Table extends Component
{
    use LivewireAlert;

    protected $listeners = ['saved', 'deleteBoard'];
    public $itemToDelete;
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

    public function deleteBoard() {
        $this->itemToDelete->delete();
        $this->alert('success', 'Proyecto eliminado');
    }

    public function deleteItem(Board $item)
    {
        $this->itemToDelete = $item;
        $this->alert('question', '¿Seguro de eliminar este proyecto?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Confirmar',
            'timer' => 5000,
            'onConfirmed' => 'deleteBoard'
        ]);
    }
}
