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
        View::composer('front.layouts.components.top.menu', MenuComposer::class);

        View::composer(['front.layouts.components.top.breadcrumbs','front.layouts.header'], function ($view) {
            $breadcrumbs = BreadCrumbs::getInstance();

            $view->with('breadcrumbs', $breadcrumbs->getBreadCrumbs());
            $view->with('title', $breadcrumbs->getTitle());
        });
    }
}
