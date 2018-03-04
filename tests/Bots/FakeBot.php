<?php
/**
 * Created by PhpStorm.
 * User: meysam
 * Date: 3/4/18
 * Time: 7:46 PM
 */

namespace Tests\Bots;


use Mvaliolahi\Notify\Contracts\Bot;

/**
 * Class FakeBot
 * @package Tests\Bots
 */
class FakeBot implements Bot
{
    /**
     * @var
     */
    protected $title;

    /**
     * @var
     */
    protected $text;

    /**
     * @param $title
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param $text
     * @return $this
     */
    public function text($text)
    {
        $this->text = $text;
        return $this;
    }
    /**
     * @return mixed
     */
    public function execute()
    {
        return json_encode([
            'title' => $this->title,
            'text' => $this->text,
        ]);
    }

    /**
     * @return mixed
     */
    public function errors()
    {
        return 'fake error!';
    }
}