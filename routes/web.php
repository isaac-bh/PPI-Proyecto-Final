<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware([
    'auth:sanctum', 
    'verified'
])->get('/dashboard/todo', function () {
    return view('todo');
})->name('dashboard-todo');

Route::get('/boards/{id}', [BoardController::class, 'index'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('board');

Route::get('/boards/{id}/edit', [BoardController::class, 'edit'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('boardEdit');