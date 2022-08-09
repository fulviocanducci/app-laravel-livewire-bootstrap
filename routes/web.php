<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\Dashboard::class)->name('dashboard.index');
Route::get('/task', App\Http\Livewire\Task\PageIndex::class)->name('task.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
