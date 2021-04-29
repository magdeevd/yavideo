<?php

use Facebook\WebDriver\WebDriverElement;


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */
    public function seeVideoIsPlaying($cssOrXPath)
    {
        $startTime = $this->grabAttributeFrom($cssOrXPath, 'currentTime');
        $this->waitForElementChange($cssOrXPath, function (WebDriverElement $el) use ($startTime) {
            $currentTime = $el->getAttribute('currentTime');
            return $startTime !== $currentTime;
        }, 2);
    }
}
