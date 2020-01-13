<?php

namespace ConfrariaWeb\Template\Providers;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'vendor');
    }

    public function register()
    {

    }

}
