<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\View\Compose\BreadCrumbs;

abstract class FrontController extends Controller
{
    protected string $main_name = '';
    protected string $main_route = '';
    protected BreadCrumbs $bread_crumbs;

    public function __construct()
    {
        $this->bread_crumbs = BreadCrumbs::getInstance();
        $this->bread_crumbs->clearCrumbs();
        $this->bread_crumbs->addCrumbs($this->main_name, !empty($this->main_route) ? route($this->main_route) : null);
    }
}
