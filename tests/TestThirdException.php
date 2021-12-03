<?php

namespace Tests;

use Fize\Exception\ThirdException;
use PHPUnit\Framework\TestCase;

class TestThirdException extends TestCase
{

    public function test__construct()
    {
        $exception = new ThirdException('BaiDu');
        var_dump($exception);
        self::assertInstanceOf(ThirdException::class, $exception);
    }

    public function testGetThirdId()
    {
        $exception = new ThirdException('BaiDu');
        var_dump($exception);
        self::assertEquals('BaiDu', $exception->getThirdId());
    }
}
