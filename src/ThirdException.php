<?php

namespace Fize\Exception;

use Throwable;

/**
 * 第三方异常
 */
class ThirdException extends RuntimeException
{
    /**
     * @var string 第三方标识
     */
    protected $thirdId;

    /**
     * 初始化
     * @param string         $thirdId  第三方标识
     * @param string         $message  错误描述
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     */
    public function __construct($thirdId, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->thirdId = $thirdId;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取第三方标识
     * @return string
     */
    public function getThirdId(): string
    {
        return $this->thirdId;
    }

}