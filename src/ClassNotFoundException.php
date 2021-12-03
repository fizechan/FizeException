<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：类不存在
 */
class ClassNotFoundException extends NotFoundException
{

    /**
     * @var string 类完全限定名
     */
    protected $class;

    /**
     * 初始化
     * @param string         $class    类完全限定名
     * @param string|null    $message  错误描述
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     */
    public function __construct(string $class, string $message = null, int $code = 0, Throwable $previous = null)
    {
        $this->class = $class;
        if (is_null($message)) {
            $message = "Class 【 $class 】 Not Found!";
        }
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取类完全限定名
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
}
