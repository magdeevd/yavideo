<?php

use Facebook\WebDriver\WebDriverKeys;
use Page\Acceptance\Video;

class VideoCest
{
    public function testVideoHasTrailer(AcceptanceTester $I, Video $videoPage)
    {
        $I->amOnPage($videoPage::$URL);
        $I->fillField($videoPage::$searchField, 'ураган');
        $I->pressKey($videoPage::$searchField, WebDriverKeys::ENTER);
        $I->waitForElementVisible($videoPage::$firstPreview);
        $I->moveMouseOver($videoPage::$firstPreview);
        $I->seeVideoIsPlaying($videoPage::$firstPreviewVideo);
    }
}
