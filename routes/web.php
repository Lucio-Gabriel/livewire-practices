<?php

use App\Http\Controllers\Layout;
use App\Livewire\Contador;
use Illuminate\Support\Facades\Route;

Route::get('/', [Layout::class, 'index'])->name('home.page');

Route::get('/create', [Layout::class, 'create'])->name('create.user');

Route::get('/list', [Layout::class, 'list'])->name('list.user');

Route::get('/listDrivers',  [Layout::class, 'drivers'])->name('list.drivers');

Route::get('/CreateUser', [Layout::class, 'user'])->name('create.form.user');