<?php

namespace Tests;

use Fize\Exception\FunctionNotFoundException;
use PHPUnit\Framework\TestCase;

class TestFunctionNotFoundException extends TestCase
{

    public function test__construct()
    {
        $exception = new FunctionNotFoundException('function_name');
        var_dump($exception);
        self::assertInstanceOf(FunctionNotFoundException::class, $exception);
    }

    public function testGetFunction()
    {
        $exception = new FunctionNotFoundException('function_name');
        var_dump($exception);
        self::assertEquals('function_name', $exception->getFunction());
    }
}
