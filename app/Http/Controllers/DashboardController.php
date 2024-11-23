<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\TodoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $boards = Board::withCount([
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
        // $boards = Board::with('todo_item')
        //             ->where('user_id', auth()->id())
        //             ->get();
        return view('dashboard', compact('boards'));
    }
}
