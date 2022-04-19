<?php

namespace Logger\Formatters;

use DateTime;
use Logger\LogLevel;

class LineFormatter
{
    private string $formatString;
    private string $formatDate;

    /**
     * @param string $formatString
     * @param string $formatDate
     */
    public function __construct(?string $formatString = null, ?string $formatDate = null)
    {
        $this->formatString = $formatString ?? '%date%  %level_code%  %level%  %message%';
        $this->formatDate = $formatDate ?? 'Y-m-d H:i:s';
    }

    public function formatted(DateTime $date, LogLevel $logLevel, string $message): string
    {
        $searchArray = [
            '%date%',
            '%level_code%',
            '%level%',
            '%message%'
        ];

        $replaceArray = [
            $date->format($this->formatDate),
            $logLevel->name,
            $logLevel->value,
            $message
        ];

        return str_replace($searchArray, $replaceArray, $this->formatString) . PHP_EOL;
    }
}