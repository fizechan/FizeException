<?php

namespace Fize\Exception\NotSetException;

use Fize\Exception\NotSetException;
use Throwable;

/**
 * 异常：参数未设置
 */
class ParameterNotSetException extends NotSetException
{

    /**
     * @var string 参数名
     */
    protected $parameter;

    /**
     * @var string 方法名(或函数名)
     */
    protected $method;

    /**
     * @var string 类完全限定名
     */
    protected $class;

    /**
     * 初始化
     * @param string         $parameter 参数名
     * @param string         $method    方法名(或函数名)
     * @param string         $class     类完全限定名
     * @param string|null    $message   错误描述
     * @param int            $code      错误码
     * @param Throwable|null $previous  前置错误
     */
    public function __construct($parameter, $method = null, $class = null, string $message = null, int $code = 0, Throwable $previous = null)
    {
        $this->parameter = $parameter;
        $this->method = $method;
        $this->class = $class;
        if (is_null($message)) {
            $message = "ParameterNotSet: `$parameter` for class `$class` in method `$method`";
        }
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取参数名
     * @return string
     */
    public function getParameter(): string
    {
        return $this->parameter;
    }

    /**
     * 获取方法名(或函数名)
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
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
