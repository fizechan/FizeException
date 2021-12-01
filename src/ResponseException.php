<?php

namespace Fize\Exception;

use Fize\Web\Response;
use Throwable;

/**
 * HTTP响应
 */
class ResponseException extends RuntimeException
{
    /**
     * @var Response 响应对象
     */
    protected $response;

    /**
     * 初始化时设置响应对象
     * @param Response       $response 响应对象
     * @param Throwable|null $previous 前置错误
     * @param string         $message  错误描述
     * @param int            $code     错误码
     */
    public function __construct(Response $response, Throwable $previous = null, string $message = "", int $code = 0)
    {
        $this->response = $response;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取响应对象
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }
}
