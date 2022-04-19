<?php

namespace Logger\Handlers;

use Logger\LogLevel;

class FakeHandler extends AbstractHandler
{
    function write(LogLevel $logLevel, string $message)
    {
        // Fake method
    }
}