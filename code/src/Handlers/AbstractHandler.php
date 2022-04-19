<?php

namespace Logger\Handlers;

use Logger\AbstractLogger;
use Logger\Formatters\AbstractFormatter;
use Logger\Formatters\LineFormatter;
use Logger\LogLevel;

abstract class AbstractHandler extends AbstractLogger
{
    protected bool $is_enabled;
    protected array $levels;
    protected ?LineFormatter $formatter;

    /**
     * @param bool $is_enabled
     * @param array $levels
     * @param LineFormatter $formatter
     */
    public function __construct(?array $params = null)
    {
        $this->is_enabled = $params['is_enabled'] ?? false;
        $this->levels = $params['levels'] ?? LogLevel::cases();
        $this->formatter = $params['formatter'] ?? null;
    }

    /**
     * @param bool $is_enabled
     */
    public function setIsEnabled(bool $is_enabled): void
    {
        $this->is_enabled = $is_enabled;
    }

    /**
     * @return bool
     */
    public function isIsEnabled(): bool
    {
        return $this->is_enabled;
    }

    /**
     * @return array|mixed
     */
    public function getLevels(): mixed
    {
        return $this->levels;
    }

}