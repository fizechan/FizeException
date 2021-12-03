<?php

namespace Tests;

use Fize\Exception\RuntimeException;
use PHPUnit\Framework\TestCase;

class TestRuntimeException extends TestCase
{
    public function test__construct()
    {
        $exception = new RuntimeException();
        var_dump($exception);
        self::assertInstanceOf(RuntimeException::class, $exception);
    }
}
