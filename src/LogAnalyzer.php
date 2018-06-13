<?php
declare(strict_types=1);

namespace Winnie\LaraDebut;

class LogAnalyzer
{
    public function isValidLogFileName(string $fileName)
    {
        if (strcasecmp(substr($fileName, -4), ".SLF") != 0) {
            return false;
        }
        return true;
    }
}