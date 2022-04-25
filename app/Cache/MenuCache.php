<?php

namespace App\Cache;

use App\Models\Brand;
use Illuminate\Support\Facades\Cache;
use ReflectionClass;

class MenuCache implements ICache
{
    const CACHE_TIME = 600; // 10 minutes

    /**
     * Set cache
     * @param $content
     * @return void
     */
    public function setCache($content): void
    {
        Cache::put($this->getKey(), $content, self::CACHE_TIME);
    }

    /**
     * Get cache
     * @return mixed
     */
    public function getCache(): mixed
    {
        return Cache::get($this->getKey(), false);
    }

    /**
     * Get content for our cache
     * @return array
     */
    public function getContent(): array
    {
        return Brand::brand();
    }

    /**
     * Get class name as Key for cache
     * @return string
     */
    public function getKey(): string
    {
        return (new ReflectionClass(self::class))->getShortName();
    }
}
