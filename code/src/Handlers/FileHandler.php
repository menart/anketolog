<?php

namespace Logger\Handlers;

use Logger\LogLevel;

class FileHandler extends AbstractHandler
{
    private string $fileName;

    /**
     * @param string $FileName
     */
    public function __construct(array $params)
    {
        parent::__construct($params);
        $this->fileName = $params['filename'];
    }

    function write(LogLevel $logLevel, string $message)
    {
        file_put_contents($this->fileName, $message, FILE_APPEND);
    }
}