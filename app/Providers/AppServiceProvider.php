<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register application services here if needed.
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Default value for 'setting' is null
        View::share('setting', null);

        try {
            
            if (Schema::hasTable('settings')) {
                $setting = Setting::first(); 
                View::share('setting', $setting); 
            }
        } 
        
        catch (QueryException $e) {
            // Log the exception if there's an issue with the database query
            Log::error("Database error: " . $e->getMessage());
        } catch (\Exception $e) {
            // Log other exceptions
            Log::error("Error: " . $e->getMessage());
        }

        // Use Bootstrap for pagination
        Paginator::useBootstrap();
    }
}

