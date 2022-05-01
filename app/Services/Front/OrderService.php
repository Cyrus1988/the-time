<?php

namespace App\Services\Front;

use App\Repositories\Front\OrderRepository;
use Illuminate\Support\Facades\Auth;

class OrderService
{

    public function __construct(private OrderRepository $orderRepository, private CartService $cartService)
    {
    }

    /**
     * @return int
     */
    public function makeOrder(): int
    {
        if ($this->cartService->isEmpty() !== true) {

            $orderId = $this->createOrder();

            if ($orderId) {
                $this->cartService->clear();
            }
        } else {
            $orderId = $this->getLastOrder();
        }

        return $orderId;
    }

    /**
     * @return int
     */
    private function createOrder(): int
    {
        return $this->orderRepository->addOrder(
            $this->cartService->getContent()->toJson(),
            Auth::user()->getAuthIdentifier()
        );
    }


    /**
     * @return int
     */
    private function getLastOrder(): int
    {
        return $this->orderRepository->getLastId(Auth::user()->getAuthIdentifier());
    }
}
