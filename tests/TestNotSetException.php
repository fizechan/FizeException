<?php

namespace Tests;

use Fize\Exception\NotSetException;
use PHPUnit\Framework\TestCase;

class TestNotSetException extends TestCase
{
    public function test__construct()
    {
        $exception = new NotSetException();
        var_dump($exception);
        self::assertInstanceOf(NotSetException::class, $exception);
    }
}
