<?php

namespace Fize\Exception;

use Throwable;

/**
 * 异常：未找到
 */
class NotFoundException extends RuntimeException
{

    /**
     * @var string 路径
     */
    protected $path;

    /**
     * 初始化
     * @param string         $path     路径
     * @param string|null    $message  错误信息
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     */
    public function __construct($path, string $message = null, int $code = 0, Throwable $previous = null)
    {
        $this->path = $path;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取路径
     * @return string
     */
    public function path(): string
    {
        return $this->path;
    }

}
