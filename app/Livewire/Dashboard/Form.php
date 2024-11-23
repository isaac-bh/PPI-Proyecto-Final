<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Board;

class Form extends Component
{
    public $isVisible = false;
    public $name;

    protected $rules = [
        'name' => 'required|min:4'
    ];

    public function render()
    {
        return view('livewire.dashboard.form');
    }

    public function toggle()
    {
        $this->isVisible = !$this->isVisible;
    }

    public function createItem()
    {
        $this->validate();

        $item = new Board();
        $item->name = $this->name;
        $item->user_id = auth()->id();
        $item->save();

        $item->name = '';

        $this->dispatch('saved');
        $this->isVisible = false;
    }
}
