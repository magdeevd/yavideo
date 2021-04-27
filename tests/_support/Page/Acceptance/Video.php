<?php
namespace Page\Acceptance;


class Video
{
    public static $URL = '/video';

    public static $searchField = '//form[@role="search"]//input';

    public static $firstPreview = '//div[contains(@class,"thumb-image__preview")][1]';

    public static function route($param): string
    {
        return static::$URL.$param;
    }

    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
