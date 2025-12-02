<?php

namespace Ladmin\Helpers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-admin-helpers');

        Helpers::boot();
    }
}
