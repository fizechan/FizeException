<?php

namespace Tests;

use Fize\Exception\HttpResponseException;
use Fize\Http\Response;
use PHPUnit\Framework\TestCase;

class TestHttpResponseException extends TestCase
{

    public function test__construct()
    {
        $response = new Response('<h1>主体内容啦</h1>');
        $exception = new HttpResponseException($response);
        var_dump($exception);
        self::assertInstanceOf(HttpResponseException::class, $exception);
    }
}
