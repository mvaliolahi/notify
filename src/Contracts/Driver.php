<?php

namespace Mvaliolahi\Notify\Contracts;


/**
 * Interface Driver
 * @package Mvaliolahi\Notify\Contracts
 */
interface Driver
{
    /**
     * @param Bot $bot
     * @return mixed
     */
    public function execute(Bot $bot);
}