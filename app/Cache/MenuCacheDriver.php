<?php

namespace App\Cache;

class MenuCacheDriver extends ACache
{
    /**
     * Get cache by key
     * @return ICache
     */
    public function getCacheDriver(): ICache
    {
        return new MenuCache();
    }
}
