<?php

namespace Fize\Exception;

use Fize\Web\Request;
use Throwable;

/**
 * 异常：HTTP错误
 */
class HttpException extends RuntimeException
{
    /**
     * @var string|null URL
     */
    protected $url;

    /**
     * 初始化
     * @param string         $message  错误描述
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     * @param string|null    $url      URL
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null, string $url = null)
    {
        $this->url = $url;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取访问的 URL
     * @return string
     */
    public function getUrl(): string
    {
        if ($this->url) {
            return $this->url;
        }
        return Request::url();
    }
}
