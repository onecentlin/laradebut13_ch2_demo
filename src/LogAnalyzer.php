<?php
declare(strict_types=1);

namespace Winnie\LaraDebut;

class LogAnalyzer
{
    public $wasLastFileNameValid;

    public function isValidLogFileName(string $fileName)
    {
        $this->wasLastFileNameValid = false;

        if ($fileName == "") {
            throw new \Exception("filename has to be provided");
        }

        if (strcasecmp(substr($fileName, -4), ".SLF") != 0) {
            return false;
        }

        $this->wasLastFileNameValid = true;
        return true;
    }
}