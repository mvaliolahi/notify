<?php

namespace Mvaliolahi\Notify\Contracts;


/**
 * Interface Bot
 * @package Mvaliolahi\Notify\Contracts
 */
interface Bot
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function errors();
}