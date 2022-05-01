<?php

namespace App\Repositories\Front;

use App\Models\Order;

class OrderRepository
{
    /**
     * @param string $data
     * @param int $id
     * @return int
     */
    public function addOrder(string $data, int $id): int
    {
        return Order::insertGetId([
            'user_id' => $id,
            'data' => $data
        ]);
    }

    /**
     * @param int $id
     * @return int
     */
    public function getLastId(int $id): int
    {
        return Order::where('user_id', $id)->latest()->first()->id;
    }
}
