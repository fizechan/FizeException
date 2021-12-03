<?php

namespace Tests;

use Fize\Exception\HttpNetworkException;
use Fize\Http\Request;
use PHPUnit\Framework\TestCase;

class TestHttpNetworkException extends TestCase
{
    public function test__construct()
    {
        $request = new Request('GET', 'https://www.baidu.com');
        $exception = new HttpNetworkException($request);
        var_dump($exception);
        self::assertInstanceOf(HttpNetworkException::class, $exception);
    }
}
