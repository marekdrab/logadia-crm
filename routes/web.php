<?php

use App\Livewire\Pages\Categories;
use App\Livewire\Pages\Materials;
use App\Livewire\Pages\Patients\PatientDetail;
use App\Livewire\Pages\Patients\Patients;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/patients', Patients::class)->middleware(['auth', 'verified'])->name('patients.index');
Route::get('/patients/{patientId}', PatientDetail::class)->middleware(['auth', 'verified'])->name('patients.show');

Route::get('/categories', Categories::class)->middleware(['auth', 'verified'])->name('categories.index');
Route::get('/materials', Materials::class)->middleware(['auth', 'verified'])->name('materials.index');
Route::get('/patients/{patientId}', PatientDetail::class)->name('patients.show');


require __DIR__.'/auth.php';
