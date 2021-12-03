<?php

namespace Tests;

use Fize\Exception\DatabaseException;
use PHPUnit\Framework\TestCase;

class TestDatabaseException extends TestCase
{

    public function test__construct()
    {
        $exception = new DatabaseException('测试错误');
        var_dump($exception);
        self::assertInstanceOf(DatabaseException::class, $exception);
    }

    public function testGetSQL()
    {
        $sql = 'SELECT 1 FROM `test`';
        $exception = new DatabaseException('测试错误', 1, null, $sql);
        var_dump($exception);
        self::assertEquals($sql, $exception->getSQL());
    }

    public function testGetBind()
    {
        $sql = 'SELECT 1 FROM `test`';
        $bind = ['name' => 'CFZ'];
        $exception = new DatabaseException('测试错误', 1, null, $sql, $bind);
        var_dump($exception);
        self::assertEquals($bind, $exception->getBind());
    }
}
