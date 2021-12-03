<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：数据库错误
 */
class DatabaseException extends RuntimeException
{

    /**
     * @var string SQL语句
     */
    protected $sql;

    /**
     * @var array|null 绑定参数
     */
    protected $bind;

    /**
     * 构造
     * @param string         $message  错误信息
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     * @param string         $sql      SQL语句
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null, string $sql = '', array $bind = null)
    {
        parent::__construct($message, $code, $previous);
        $this->sql = $sql;
        $this->bind = $bind;
    }

    /**
     * 返回相关SQL语句
     * @return string
     */
    public function getSQL(): string
    {
        return $this->sql;
    }

    /**
     * 返回SQL语句的绑定参数
     * @return array|null
     */
    public function getBind(): ?array
    {
        return $this->bind;
    }
}
