<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Repositories\CheckInHistory\CheckInHistoryRepository;
// use App\Repositories\CheckInHistory\CheckInHistoryRepositoryInterface;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(
            // RichMessageRepositoryInterface::class,
            // RichMessageRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
