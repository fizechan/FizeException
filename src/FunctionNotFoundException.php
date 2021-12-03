<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：函数不存在
 */
class FunctionNotFoundException extends NotFoundException
{
    /**
     * @var string 函数名
     */
    protected $function;

    /**
     * 初始化
     * @param string $function 函数名
     */
    public function __construct($function, string $message = null, int $code = 0, Throwable $previous = null)
    {
        $this->function = $function;
        if (is_null($message)) {
            $message = "Function 【 $function 】Not Found!";
        }
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取函数名
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }
}
