<?php

namespace Logger\Handlers;

use Logger\LogLevel;

class FakeHandler extends AbstractHandler
{
    function log(LogLevel $logLevel, string $message)
    {
        // Fake method
    }
}