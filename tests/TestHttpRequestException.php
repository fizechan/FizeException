<?php

namespace Tests;

use Fize\Exception\HttpRequestException;
use Fize\Http\Request;
use PHPUnit\Framework\TestCase;

class TestHttpRequestException extends TestCase
{

    public function test__construct()
    {
        $request = new Request('GET', 'https://www.baidu.com');
        $exception = new HttpRequestException($request);
        var_dump($exception);
        self::assertInstanceOf(HttpRequestException::class, $exception);
    }
}
