<?php

namespace Mvaliolahi\Notify\Drivers\Slack;


use Mvaliolahi\Notify\Contracts\Bot;
use Mvaliolahi\Notify\Contracts\Driver;
use Curl\Curl;

/**
 * Class Slack
 * @package Mvaliolahi\Notify\Driver
 */
class Slack implements Driver
{
    /**
     * @var
     */
    protected $config;

    /**
     * Slack constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param Bot $bot
     * @return mixed
     * @throws \Exception
     */
    public function execute(Bot $bot)
    {
        return (new Curl)->post($this->config['web_hook'], $bot->execute());
    }
}