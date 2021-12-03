<?php

namespace Tests;

use Fize\Exception\DriverException;
use PHPUnit\Framework\TestCase;

class TestDriverException extends TestCase
{
    public function test__construct()
    {
        $exception = new DriverException();
        var_dump($exception);
        self::assertInstanceOf(DriverException::class, $exception);
    }
}
