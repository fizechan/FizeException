<?php

namespace Tests;

use Fize\Exception\ClassNotFoundException;
use PHPUnit\Framework\TestCase;

class TestClassNotFoundException extends TestCase
{

    public function test__construct()
    {
        $exception = new ClassNotFoundException(TestCase::class);
        var_dump($exception);
        self::assertInstanceOf(ClassNotFoundException::class, $exception);
    }

    public function testGetClass()
    {
        $exception = new ClassNotFoundException(TestCase::class);
        $class = $exception->getClass();
        var_dump($class);
        self::assertEquals(TestCase::class, $class);
    }
}
