<?php

use App\Livewire\Bandeira\Detail as BandeiraDetail;
use App\Livewire\GrupoEconomico\Form as GrupoEconomicoForm;
use App\Livewire\Bandeira\Form as BandeiraForm;
use App\Livewire\Bandeira\Index as BandeiraIndex;
use App\Livewire\GrupoEconomico\Index as GrupoEconomicoIndex;
use App\Livewire\Unidade\Detail as UnidadeDetail;
use App\Livewire\Unidade\Form as UnidadeForm;
use App\Livewire\Unidade\Index as UnidadeIndex;
use App\Models\Bandeira;
use App\Models\Unidade;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/grupos_economicos', GrupoEconomicoIndex::class)->name("grupos_economicos.index");
    Route::get('/grupos_economicos/form/{grupoEconomico?}', GrupoEconomicoForm::class)->name('grupos_economicos.form');
    Route::get('/grupos_economicos/delete/{grupoEconomico}', [GrupoEconomicoForm::class, 'destroy'])->name('grupos_economicos.delete');

    Route::get('/bandeiras', BandeiraIndex::class)->name("bandeiras.index");
    Route::get('/bandeiras/form/{bandeira?}', BandeiraForm::class)->name('bandeiras.form');
    Route::get('/bandeiras/delete/{bandeira}', [BandeiraForm::class, 'destroy'])->name('bandeiras.delete');
    Route::get('/bandeiras/show/{bandeira}', BandeiraDetail::class)->name('bandeiras.show');

    Route::get('/unidades', UnidadeIndex::class)->name("unidades.index");
    Route::get('/unidades/form/{unidade?}', UnidadeForm::class)->name('unidades.form');
    Route::get('/unidades/delete/{unidade}', [UnidadeForm::class, 'destroy'])->name('unidades.delete');
    Route::get('/unidades/show/{unidade}', UnidadeDetail::class)->name('unidades.show');
});

require __DIR__.'/auth.php';
