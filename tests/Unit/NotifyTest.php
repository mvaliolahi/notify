<?php
/**
 * Created by PhpStorm.
 * User: meysam
 * Date: 3/4/18
 * Time: 7:19 PM
 */

namespace Tests\Unit;


use Mvaliolahi\Notify\Notify;
use Tests\Bots\FakeBot;
use Tests\Drivers\FakeDriver;
use Tests\TestCase;

class NotifyTest extends TestCase
{
    /** @test */
    public function it_should_be_able_to_accept_driver()
    {
        $notify = new Notify($driver = new FakeDriver);

        $this->assertEquals($notify->driver(), $driver);
    }

    /** @test */
    public function it_should_be_able_to_call_send_method_on_current_driver()
    {
        $notify = new Notify(new FakeDriver);

        $output = $notify->send(
            (new FakeBot)->title('fake title')->text('fake text.')
        );

        $this->assertEquals('{"title":"fake title","text":"fake text."}', $output);
    }

    /** @test */
    public function it_should_access_to_bot_error()
    {
        $notify = new Notify(new FakeDriver);

        $notify->send(
            (new FakeBot)->title('fake title')->text('fake text.')
        );

        $this->assertEquals('fake error!', $notify->errors());

    }
}