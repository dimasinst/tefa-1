<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Profile;
use Illuminate\Support\Facades\View;
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
    //     View::composer('components.footer', function ($view) {
    //         $profile = Profile::first();  // Ambil data profile
    //         $view->with('profile', $profile);  // Kirim data ke tampilan footer
    //     });
    // }
}
