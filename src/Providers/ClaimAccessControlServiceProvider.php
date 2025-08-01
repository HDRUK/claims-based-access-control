<?php

namespace ClaimsAccessControl\Providers;

use Illuminate\Support\ServiceProvider;

class ClaimsAccessControlServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '../../config/claims-access.php', 'claims-access');
    }

    public function boot(): void
    {
        // load routes (if any), publish configs etc.
    }
}