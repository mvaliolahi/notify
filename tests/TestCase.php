<?php

namespace Tests;


use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use SplFileObject;

/**
 * Class TestCase
 * @package Tests
 */
class TestCase extends PHPUnitTestCase
{
    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();

        $this->loadEnv();
    }

    /**
     * @param $method
     * @param $object
     * @param array $args
     * @return mixed
     */
    public function callMethod($method, $object, $args = [])
    {
        $translator = new \ReflectionClass(get_class($object));
        $method = $translator->getMethod($method);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $args);
    }

    /**
     * @param $string
     * @return bool|string
     */
    public function getProcessResult($string)
    {
        return substr($string, 0, strlen($string) - 2);
    }

    /**
     *
     */
    private function loadEnv()
    {
        $file = new SplFileObject(__DIR__ . './../.env.testing');

        while (!$file->eof()) {
            putenv($file->fgets());
        }

        $file = null;
    }
}