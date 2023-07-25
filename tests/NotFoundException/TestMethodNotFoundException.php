<?php

namespace Tests\NotFoundException;

use Fize\Exception\NotFoundException\MethodNotFoundException;
use PHPUnit\Framework\TestCase;

class TestMethodNotFoundException extends TestCase
{

    public function test__construct()
    {
        $exception = new MethodNotFoundException(TestCase::class, 'MethodName');
        var_dump($exception);
        self::assertInstanceOf(MethodNotFoundException::class, $exception);
    }

    public function testGetMethod()
    {
        $exception = new MethodNotFoundException(TestCase::class, 'MethodName');
        $method = $exception->getMethod();
        var_dump($method);
        self::assertEquals('MethodName', $method);
    }


}
