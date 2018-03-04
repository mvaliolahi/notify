<?php

namespace Tests\Feature;


use Mvaliolahi\Notify\Bots\Slack\Slack;
use Mvaliolahi\Notify\Drivers\Slack\Slack as SlackDriver;
use Mvaliolahi\Notify\Notify;
use Tests\TestCase;

/**
 * Class NotifyTest
 * @package Tests\Feature
 */
class NotifyTest extends TestCase
{
    /**
     * @var Notify
     */
    protected $notify;

    /**
     * @test
     */
    public function it_should_be_able_to_send_message_using_slack()
    {
        $result = $this->notify->send(
            (new Slack)->text('this is a test!')
        );

        $this->assertEquals('ok', $result);
    }

    /**
     * @test
     */
    public function it_should_be_able_to_send_message_using_slack_as_code_block()
    {
        $result = $this->notify->send(
            (new Slack)->text('i Am the normal text')->format()->bold('BOLD')
            ->format()->code('CODE')
        );

        $this->assertEquals('ok', $result);
    }

    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->notify = new Notify(new SlackDriver([
            'web_hook' => getenv('SLACK_WEB_HOOK')
        ]));
    }
}