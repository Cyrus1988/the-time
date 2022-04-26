<?php

namespace App\View\Compose;

class BreadCrumbs
{
    protected const DEFAULT_CRUMB = [['href' => '', 'name' => 'Home']];

    private static BreadCrumbs|null $instatnce = null;
    private array $bread_crumbs;
    private string $title = '';

    final public function __construct(array $bread_crumbs = null)
    {
        $this->title = config('app.name');
        $this->bread_crumbs = $bread_crumbs ?? static::DEFAULT_CRUMB;
    }

    /**
     * Add crumbs per page
     * @param string $name
     * @param string|null $url
     * @return void
     */
    public function addCrumbs(string $name, string $url = null): void
    {
        if (!empty($name)) {
            $this->title .= ' | ' . $name;
        }

        $this->bread_crumbs[] = [
            'href' => $url,
            'name' => $name,
            'is_active' => empty($url),
        ];
    }

    /**
     * @return array
     */
    public function getBreadCrumbs(): array
    {
        $result = [];

        foreach ($this->bread_crumbs as $bread_crumb) {
            if (empty($bread_crumb['name'])) {
                continue;
            }

            $crumb = $bread_crumb;
            $crumb['is_active'] = !empty($bread_crumb['href']);

            $result[] = $crumb;
        }

        return $result;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Clear our breadcrumbs on every page
     * @return void
     */
    public function clearCrumbs(): void
    {
        $this->title = config('app.name');
        $this->bread_crumbs = static::DEFAULT_CRUMB;
    }

    /**
     * Get instance of Breadcrums class with title and crumbs
     * @param array|null $bread_crumbs
     * @return BreadCrumbs|null
     */
    public static function getInstance(array $bread_crumbs = null): ?BreadCrumbs
    {
        if (null == self::$instatnce) {
            self::$instatnce = new BreadCrumbs($bread_crumbs);
        } else {
            if (!empty($bread_crumbs)) {
                self::$instatnce->title = config('app.name');
                self::$instatnce->bread_crumbs = [];
                foreach ($bread_crumbs as $crumb) {
                    self::$instatnce->addCrumbs($crumb['name'] ?? '', $crumb['href'] ?? '');
                }

                self::$instatnce->bread_crumbs = $bread_crumbs;
            }
        }

        return self::$instatnce;
    }
}
