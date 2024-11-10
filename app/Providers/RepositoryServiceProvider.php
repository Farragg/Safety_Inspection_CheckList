<?php

namespace App\Providers;

use App\Interfaces\SafetyCheckList\SafetyCheckListRepositoryInterface;
use App\Repository\SafetyCheckList\SafetyCheckListRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SafetyCheckListRepositoryInterface::class, SafetyCheckListRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
