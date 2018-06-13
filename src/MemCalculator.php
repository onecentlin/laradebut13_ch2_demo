<?php
declare(strict_types=1);

namespace Winnie\LaraDebut;

class MemCalculator
{
    private $sum = 0;

    public function add(int $number)
    {
        $this->sum += $number;
    }

    public function sum()
    {
        $temp = $this->sum;
        $this->sum = 0;
        return $temp;
    }
}
