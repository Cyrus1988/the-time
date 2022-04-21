<?php

namespace App\Cache;

/**
 * Cache creator
 */
abstract class ACache
{
    /**
     * Factory method to get cache driver
     * @return ICache
     */
    abstract public function getCacheDriver(): ICache;

    /**
     * @return mixed
     */
    public function init(): mixed
    {
        /** Get needed cache-driver */
        $cacheDriver = $this->getCacheDriver();

        /** Get cache if exist */
        $cacheValue = $cacheDriver->getCache();

        if (!$cacheValue) {

            /** Get content for cache and return it */
            $cacheValue = $cacheDriver->getContent();
            $cacheDriver->setCache($cacheValue);
        }

        return $cacheValue;
    }
}
