<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\footer;
use App\Models\category;

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
        $footer = footer::first();
        $all_category = category::latest()->get();
        View::share([
            'all_category'=>$all_category,
            'footer'=>$footer,
        ]);

        Paginator::useBootstrap();
    }
}
