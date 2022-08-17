<?php

namespace Fize\Exception;

use Fize\Http\RequestException;
use Fize\Web\Request;

/**
 * 异常：HTTP请求异常
 */
class HttpRequestException extends RequestException
{
    /**
     * 获取访问的 URL
     * @return string
     */
    public function url(): string
    {
        return Request::url();
    }
}
