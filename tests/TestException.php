<?php

namespace Tests;

use Fize\Exception\Exception;
use PHPUnit\Framework\TestCase;

class TestException extends TestCase
{
    public function test__construct()
    {
        $exception = new Exception();
        var_dump($exception);
        self::assertInstanceOf(Exception::class, $exception);
    }
}
