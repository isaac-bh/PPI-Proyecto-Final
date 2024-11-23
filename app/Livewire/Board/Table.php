<?php

namespace App\Livewire\Board;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\TodoItem;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;

    protected $listeners = ['saved', 'deleteItem'];
    public $board_id;
    public $itemToDelete;

    public function mount($board_id)
    {
        $this->board_id = $board_id;
    }

    public function render()
    {
        $list = TodoItem::where('board_id', $this->board_id)->get();
        $todo = $list->filter(function ($task) {
            return $task->status == "todo";
        });
        $in_progress = $list->filter(function ($task) {
            return $task->status == "in-progress";
        });
        $done = $list->filter(function ($task) {
            return $task->status == "done";
        });

        return view('livewire.board.table', [ 'todo' => $todo, 'in_progress' => $in_progress, 'done' => $done ]);
    }

    public function updateStatus($list)
    {
        foreach ($list as $task) {
            $value = $task['value'];
            $items = $task['items'];
            foreach($items as $item) {
                $task = TodoItem::find($item['value']);
                if ($task) {
                    $task->update(['status' => $value]);
                }
            }
        }
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

    public function deleteItem() {
        $this->itemToDelete->delete();
        $this->alert('success', 'Tarea eliminada');
    }

    public function delete(TodoItem $item)
    {
        $this->itemToDelete = $item;
        $this->alert('question', '¿Seguro de eliminar esta tarea?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Confirmar',
            'timer' => null,
            'onConfirmed' => 'deleteItem'
        ]);
    }
}
