<?php

namespace Mvaliolahi\Notify;


use Mvaliolahi\Notify\Contracts\Bot;
use Mvaliolahi\Notify\Contracts\Driver;

/**
 * Class Notify
 * @package Mvaliolahi\Notify
 */
class Notify
{
    /**
     * @var Driver
     */
    protected $driver;

    /**
     * @var
     */
    protected $errors;

    /**
     * Notify constructor.
     * @param $driver
     */
    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param Bot $bot
     * @return mixed
     */
    public function send(Bot $bot)
    {
        $output = $this->driver->execute($bot);
        $this->errors = $bot->errors();

        return $output;
    }

    /**
     * @return Driver
     */
    public function driver()
    {
        return $this->driver;
    }

    /**
     * @return mixed
     */
    public function errors()
    {
        return $this->errors;
    }
}