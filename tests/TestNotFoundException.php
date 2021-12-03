<?php

namespace Tests;

use Fize\Exception\NotFoundException;
use PHPUnit\Framework\TestCase;

class TestNotFoundException extends TestCase
{
    public function test__construct()
    {
        $exception = new NotFoundException();
        var_dump($exception);
        self::assertInstanceOf(NotFoundException::class, $exception);
    }
}
