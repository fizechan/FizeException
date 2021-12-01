<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：数据异常
 */
class DataException extends RuntimeException
{
    /**
     * @var array 数据
     */
    protected $data;

    /**
     * 构造
     * @param array          $data    数据
     * @param string         $message 错误描述
     * @param int            $code    错误码
     * @param Throwable|null $previous 前置异常
     */
    public function __construct(array $data, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->data = $data;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取数据
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
