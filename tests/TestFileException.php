<?php

namespace Tests;

use Fize\Exception\FileException;
use PHPUnit\Framework\TestCase;

class TestFileException extends TestCase
{
    public function test__construct()
    {
        $exception = new FileException(__FILE__);
        var_dump($exception);
        self::assertInstanceOf(FileException::class, $exception);
    }
}
