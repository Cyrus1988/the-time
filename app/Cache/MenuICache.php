<?php

namespace App\Cache;

use App\Models\Brand;
use Illuminate\Support\Facades\Cache;
use ReflectionClass;

class MenuICache implements ICache
{
    /**
     * Set cache
     * @param $content
     * @return void
     */
    public function setCache($content): void
    {
        Cache::put($this->getKey(), $content);
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
