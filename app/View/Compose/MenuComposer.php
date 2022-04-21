<?php

namespace App\View\Compose;

use App\Cache\MenuCacheDriver;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view): void
    {
        $driver = new MenuCacheDriver();

        $content = $driver->init();

        $view->with('brands', $content);
    }
}
