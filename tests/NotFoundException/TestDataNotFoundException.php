<?php

namespace Tests\NotFoundException;

use Fize\Exception\NotFoundException\DataNotFoundException;
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
