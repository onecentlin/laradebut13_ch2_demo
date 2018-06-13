<?php
declare(strict_types=1);

namespace Winnie\LaraDebut;

class LogAnalyzer
{
    public function isValidLogFileName(string $fileName)
    {
        if (substr($fileName, -4) !== ".SLF") {
            return false;
        }
        return true;
    }
}