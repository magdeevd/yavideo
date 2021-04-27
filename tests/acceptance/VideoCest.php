<?php

use Facebook\WebDriver\WebDriverElement;
use Facebook\WebDriver\WebDriverKeys;
use Page\Acceptance\Video;

class FirstCest
{
    public function testVideoHasTrailer(AcceptanceTester $I, Video $videoPage)
    {
        $I->amOnPage($videoPage::$URL);
        $I->fillField($videoPage::$searchField, 'ураган' . WebDriverKeys::ENTER);
        $I->waitForElementVisible($videoPage::$firstPreview);
        $I->moveMouseOver($videoPage::$firstPreview);
        $I->waitForElementChange($videoPage::$firstPreview, function (WebDriverElement $el) {
            $class = $el->getAttribute('class');
            return strpos($class, 'target_playing');
        }, 2);
    }
}
