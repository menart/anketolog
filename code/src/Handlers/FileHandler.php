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

    function log(LogLevel $logLevel, string $message)
    {
        if ($this->isIsEnabled() and in_array($logLevel, $this->getLevels())) {
            $logMessage = $this->formatter->formatted(new \DateTime(), $logLevel, $message);
            file_put_contents($this->fileName, $logMessage, FILE_APPEND);
        }
    }
}