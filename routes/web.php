<?php

use App\Http\Controllers\Layout;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;

Route::get('/', [Layout::class, 'index'])->name('home.page');

Route::get('/create', [Layout::class, 'create'])->name('create.user');

// Route::get('/contador', [Layout::class, 'contador']);