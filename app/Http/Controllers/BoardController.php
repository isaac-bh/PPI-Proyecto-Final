<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index($board_id)
    {
        $board = Board::select('name')->find($board_id);

        return view('board', [
            'board_id' => $board_id,
            'board' => $board->name
        ]);
    }
    
    public function edit($board_id)
    {
        $board = Board::select('name')->find($board_id);

        return view('boardEdit', [
            'board_id' => $board_id,
            'board' => $board->name
        ]);
    }
}
