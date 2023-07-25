<?php

namespace Tests\NotSetException;

use Fize\Exception\NotSetException\ParameterNotSetException;
use PHPUnit\Framework\TestCase;

class TestParameterNotSetException extends TestCase
{

    public function test__construct()
    {
        $exception = new ParameterNotSetException('Parameter');
        var_dump($exception);
        self::assertInstanceOf(ParameterNotSetException::class, $exception);
    }

    public function testGetParameter()
    {
        $exception = new ParameterNotSetException('Parameter');
        var_dump($exception);
        self::assertEquals('Parameter', $exception->getParameter());
    }

    public function testGetMethod()
    {
        $exception = new ParameterNotSetException('Parameter', 'Method');
        var_dump($exception);
        self::assertEquals('Method', $exception->getMethod());
    }

    public function testGetClass()
    {
        $exception = new ParameterNotSetException('Parameter', 'Method', ParameterNotSetException::class);
        var_dump($exception);
        self::assertEquals(ParameterNotSetException::class, $exception->getClass());
    }
}
