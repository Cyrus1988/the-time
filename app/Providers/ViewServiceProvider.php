<?php

namespace App\Providers;

use App\View\Compose\BreadCrumbs;
use App\View\Compose\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.components.menu', MenuComposer::class);

        View::composer(['front.components.breadcrumbs','front.layouts.header'], function ($view) {
            $breadcrumbs = BreadCrumbs::getInstance();

            $view->with('breadcrumbs', $breadcrumbs->getBreadCrumbs());
            $view->with('title', $breadcrumbs->getTitle());
        });
    }
}
