<?php

namespace App\Providers;

use App\Models\GrupoEconomico;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::model('grupo_economico', GrupoEconomico::class);

        Builder::macro('search', function($field, $string) {
            return $string ? $this->orWhere($field, 'like', '%'.$string.'%') : $this;
        });
    }
}
