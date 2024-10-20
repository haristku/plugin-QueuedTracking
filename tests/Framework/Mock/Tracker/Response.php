<?php

/**
* Matomo - free/libre analytics platform
*
* @link https://matomo.org
* @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
*/

namespace Piwik\Plugins\QueuedTracking\tests\Framework\Mock\Tracker;

class Response extends \Piwik\Tests\Framework\Mock\Tracker\Response
{
    public $isResponseSentDirectly = false;

    public function sendResponseToBrowserDirectly()
    {
        $this->isResponseSentDirectly = true;
    }
}
