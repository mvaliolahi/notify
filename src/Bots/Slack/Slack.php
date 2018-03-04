<?php

namespace Mvaliolahi\Notify\Bots\Slack;


use Mvaliolahi\Notify\Bots\Slack\Format\Format;
use Mvaliolahi\Notify\Contracts\Bot;


/**
 * Class Slack
 * @package Mvaliolahi\Notify\Bots\Slack
 */
class Slack implements Bot
{
    /**
     * @var
     */
    protected $text = '';

    /**
     * @var
     */
    protected $code = '';

    /**
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->text .= $text;
        return $this;
    }

    /**
     * @return Format
     */
    public function format()
    {
        return new Format($this);
    }

    /**
     *
     */
    public function execute()
    {
        return json_encode([
            'text' => $this->text,
        ]);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function errors()
    {
        return [];
    }
}