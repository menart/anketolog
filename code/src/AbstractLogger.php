<?php

namespace Logger;

use Logger\Formatters\AbstractFormatter;

abstract class AbstractLogger
{
    abstract function log(LogLevel $logLevel, string $message);

    public function error(string $message)
    {
        $this->log(LogLevel::LEVEL_ERROR, $message);
    }

    public function info(string $message)
    {
        $this->log(LogLevel::LEVEL_INFO, $message);
    }

    public function debug(string $message)
    {
        $this->log(LogLevel::LEVEL_DEBUG, $message);
    }

    public function notice(string $message)
    {
        $this->log(LogLevel::LEVEL_NOTICE, $message);
    }
}