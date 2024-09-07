<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Landing::class)->name('landing');
Route::get('/register', \App\Livewire\Register::class)->name('register');
Route::get('/login', \App\Livewire\Login::class)->name('login');

