<?php

namespace Tests;

use Fize\Exception\DataException;
use PHPUnit\Framework\TestCase;

class TestDataException extends TestCase
{

    public function test__construct()
    {
        $data = ['name' => 'CFZ'];
        $exception = new DataException($data);
        var_dump($exception);
        self::assertInstanceOf(DataException::class, $exception);
    }

    public function testGetData()
    {
        $data = ['name' => 'CFZ'];
        $exception = new DataException($data);
        var_dump($exception);
        self::assertEquals($data, $exception->getData());
    }
}
