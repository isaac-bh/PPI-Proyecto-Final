<?php

namespace App\Livewire\Todo;

use App\Models\TodoItem;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $description;
    public $status = 'todo';
    public $board_id = 1;
    public $user_id = 2;

    protected $rules = [
        'name' => 'required|min:6'
    ];

    public function render()
    {
        return view('livewire.todo.form');
    }

    public function createItem()
    {
        $this->validate();

        $item = new TodoItem();
        $item->name = $this->name;
        $item->description = $this->description;
        $item->status = $this->status;
        $item->board_id = 1;
        $item->user_id = 2;
        $item->save();

        $this->dispatch('saved');
    }
}
