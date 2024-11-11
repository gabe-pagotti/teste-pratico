<?php

use App\Livewire\GrupoEconomico\Form;
use App\Livewire\GrupoEconomico\Index;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/grupos_economicos', Index::class)->name("grupos_economicos.index");
    Route::get('/grupos_economicos/form/{grupoEconomico?}', Form::class)->name('grupos_economicos.form');
    Route::get('/grupos_economicos/delete/{grupoEconomico}', [Form::class, 'destroy'])->name('grupos_economicos.delete');
});
require __DIR__.'/auth.php';
