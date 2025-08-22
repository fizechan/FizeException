<?php

namespace Fize\Exception;

use Throwable;

/**
 * 文件异常
 */
class FileException extends RuntimeException
{

    /**
     * @var string 文件路径
     */
    protected $filePath;

    /**
     * 初始化
     * @param string         $filePath 文件路径
     * @param string         $message  错误描述
     * @param int            $code     错误码
     * @param Throwable|null $previous 前置错误
     */
    public function __construct($filePath, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->filePath = $filePath;
        parent::__construct($message, $code, $previous);
    }

    /**
     * 获取文件路径
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

}
