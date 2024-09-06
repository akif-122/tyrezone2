<?php

namespace App\Providers;

use App\Models\Manufacturer;
use App\Models\Size;
use Illuminate\Support\Facades\View;
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
    // public function boot(): void
    // {
    //     //
    // }

    public function boot()
    {
        $navManufactures = Manufacturer::with("products", "products.manufacturer")->get();

        // $navManufactures = Manufacturer::orderBy("created_at", "DESC")->limit(8)->get();
        View::share('navManufactures', $navManufactures);
    }
}
