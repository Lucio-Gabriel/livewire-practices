<?php

use App\Http\Controllers\Layout;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;

Route::get('/', [Layout::class, 'index'])->name('home.page');

// Route::get('/contador', [Layout::class, 'contador']);