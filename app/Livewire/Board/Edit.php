<?php

namespace App\Livewire\Board;

use App\Models\Board;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $board_id;

    protected $rules = [
        'name' => 'required|min:4'
    ];

    public function mount($board_id)
    {
        $this->board_id = $board_id;

        $board = Board::find($board_id);
        if ($board) {
            $this->name = $board->name;
        }
    }

    public function render()
    {
        return view('livewire.board.edit');
    }

    public function editItem()
    {
        $this->validate();

        $board = Board::find($this->board_id);
        $board->update([
            'name' => $this->name,
        ]);

        return redirect()->route('dashboard');
    }
}
