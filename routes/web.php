<?php

use App\Livewire\Pages\Materials;
use App\Livewire\Pages\Patients;

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::get('/patients', Patients::class)->middleware(['auth', 'verified'])->name('patients.index');
Route::get('/materials', Materials::class)->middleware(['auth', 'verified'])->name('materials.index');


require __DIR__.'/auth.php';
