<?php

namespace Logger;

use Logger\Handlers\AbstractHandler;

class Logger extends AbstractLogger
{
    /**
     * @var AbstractHandler[];
     */
    private array $handlers = [];

    public function addHandler(AbstractHandler $logger)
    {
        $this->handlers[] = $logger;
    }

    public function log(LogLevel $logLevel, string $message)
    {
        foreach ($this->handlers as $handler) {
            $handler->log($logLevel, $message);
        }
    }
}