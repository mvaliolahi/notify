<?php
/**
 * Created by PhpStorm.
 * User: meysam
 * Date: 3/4/18
 * Time: 7:45 PM
 */

namespace Tests\Drivers;


use Mvaliolahi\Notify\Contracts\Bot;
use Mvaliolahi\Notify\Contracts\Driver;

/**
 * Class FakeDriver
 * @package Tests\Drivers
 */
class FakeDriver implements Driver
{
    /**
     * @param Bot $bot
     * @return mixed
     */
    public function execute(Bot $bot)
    {
        return $bot->execute();
    }
}