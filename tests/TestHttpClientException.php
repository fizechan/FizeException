<?php

namespace Tests;

use Fize\Exception\HttpClientException;
use PHPUnit\Framework\TestCase;

class TestHttpClientException extends TestCase
{
    public function test__construct()
    {
        $exception = new HttpClientException();
        var_dump($exception);
        self::assertInstanceOf(HttpClientException::class, $exception);
    }
}
