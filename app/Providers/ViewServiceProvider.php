<?php

namespace App\Providers;

use App\Productcategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
       // data for capitalbaths
       View::composer('*', function ($view) {
          $categories = Productcategory::with('translations','subcategories')->get() ?? [];
          $view->with(['categories' => $categories]);
       });
    }
}
