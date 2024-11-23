<?php

namespace App\Livewire\Board;
use Illuminate\Support\Facades\Auth;

use App\Models\TodoItem;
use Livewire\Component;

class Form extends Component
{
    public $isVisible = false;
    public $name;
    public $description;
    public $status = 'todo';
    public $board_id;

    public function mount($board_id)
    {
        $this->board_id = $board_id;
    }

    protected $rules = [
        'name' => 'required|min:4'
    ];

    public function render()
    {
        return view('livewire.board.form');
    }

    public function toggle()
    {
        $this->isVisible = !$this->isVisible;
    }

    public function createItem()
    {
        $this->validate();

        $item = new TodoItem();
        $item->name = $this->name;
        $item->description = $this->description;
        $item->status = $this->status;
        $item->board_id = $this->board_id;
        $item->user_id = auth()->id();
        $item->save();

        $this->name = '';
        $this->description = '';

        $this->dispatch('saved');
        $this->isVisible = false;
    }
}
