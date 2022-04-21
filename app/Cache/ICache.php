<?php

namespace App\Cache;

interface ICache
{
    public function setCache($content);

    public function getCache();

    public function getContent();

    public function getKey(): string;
}
