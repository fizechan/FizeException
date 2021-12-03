<?php

namespace Tests;

use Fize\Exception\DataNotFoundException;
use PHPUnit\Framework\TestCase;

class TestDataNotFoundException extends TestCase
{
    public function test__construct()
    {
        $exception = new DataNotFoundException();
        var_dump($exception);
        self::assertInstanceOf(DataNotFoundException::class, $exception);
    }
}
