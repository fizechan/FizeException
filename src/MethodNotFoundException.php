<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：方法不存在
 */
class MethodNotFoundException extends ClassNotFoundException
{

    /**
     * @var string 方法名
     */
    protected $method;

    /**
     * 初始化
     * @param string $class  类完全限定名
     * @param string $method 方法名
     */
    public function __construct($class, $method, string $message = null, int $code = 0, Throwable $previous = null)
    {
        $this->method = $method;
        if (is_null($message)) {
            $message = "Method 【 $method 】Not Found In Class 【 $class 】!";
        }
        parent::__construct($class, $message, $code, $previous);
    }

    /**
     * 获取方法名
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
}
