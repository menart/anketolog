<?php

namespace Logger\Handlers;

use Logger\AbstractLogger;
use Logger\LogLevel;

class SysLogHandler extends AbstractHandler
{

    function write(LogLevel $logLevel, string $message)
    {
        syslog((int)$logLevel->value, $message);
    }
}