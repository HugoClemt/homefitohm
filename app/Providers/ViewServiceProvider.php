<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Option;
use App\Models\Actualite;
use App\Models\Coach;
use Carbon\Carbon;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.footer', function ($view) {
            $view->with('option', Option::first());
        });

        View::composer('layouts.actualite', function ($view) {
            $actualites = Actualite::all();
            $actualites = $actualites->sortByDesc('date');
            foreach ($actualites as $key => $actualite) {
                $actualites[$key]->date = Carbon::parse($actualite->date)->locale('fr')->isoFormat('D MMMM YYYY');
            }
            $view->with('actualites', $actualites);
        });

        View::composer('layouts.coach', function ($view) {
            $coachs = Coach::all();
            $coachAleatoire = $coachs->random();
            $view->with('coach', $coachAleatoire);
        });
    }
}
