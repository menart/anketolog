<?php

namespace Logger;

enum LogLevel: string
{
    case LEVEL_ERROR = '001';
    case LEVEL_INFO = '002';
    case LEVEL_DEBUG = '003';
    case LEVEL_NOTICE = '004';
}