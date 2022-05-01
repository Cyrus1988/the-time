<?php

namespace App\Http\Controllers\Front\Order;

use App\Http\Controllers\Controller;
use App\Services\Front\OrderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class OrderController extends Controller
{
    public function __construct(private OrderService $orderService)
    {
    }

    /**
     * @return Application|Factory|View
     */
    public function store(): View|Factory|Application
    {
        $orderId = $this->orderService->makeOrder();

        return view('front.pages.order.index', [
            'orderId' => $orderId
        ]);
    }
}
