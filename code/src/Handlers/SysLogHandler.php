<?php

namespace Logger\Handlers;

use Logger\AbstractLogger;
use Logger\LogLevel;

class SysLogHandler extends AbstractHandler
{

    function log(LogLevel $logLevel, string $message)
    {
        if ($this->isIsEnabled() and in_array($logLevel, $this->getLevels())) {
            syslog((int)$logLevel->value, $message);
        }
    }
}