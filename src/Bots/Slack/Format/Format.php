<?php

namespace Mvaliolahi\Notify\Bots\Slack\Format;
use Mvaliolahi\Notify\Bots\Slack\Slack;


/**
 * Class Format
 * @package Mvaliolahi\Notify\Bots\Slack
 */
class Format
{
    /**
     * @var Slack
     */
    protected $slackBot;

    /**
     * Format constructor.
     * @param $slackBot
     */
    public function __construct($slackBot)
    {
        $this->slackBot = $slackBot;
    }

    /**
     * @param $text
     * @return Slack
     */
    public function bold($text)
    {
        $this->slackBot->text(" *{$text}* ");
        return $this->slackBot;
    }

    /**
     * @param $text
     * @return Slack
     */
    public function italic($text)
    {
        $this->slackBot->text(" _{$text}_ ");
        return $this->slackBot;
    }

    /**
     * @param $text
     * @return Slack
     */
    public function strikeThrough($text)
    {
        $this->slackBot->text(" ~{$text}~ ");
        return $this->slackBot;
    }

    /**
     * @param $text
     * @return Slack
     */
    public function blockQuotes($text)
    {
        $this->slackBot->text(" >{$text} ");
        return $this->slackBot;
    }

    /**
     * @param $code
     * @return Slack
     */
    public function code($code)
    {
        $this->slackBot->text(" `{$code}` ");
        return $this->slackBot;
    }

    /**
     * @param $code
     * @return Slack
     */
    public function pre($code)
    {
        $this->slackBot->text(" ```{$code}``` ");
        return $this->slackBot;
    }
}