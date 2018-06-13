<?php
use PHPUnit\Framework\TestCase;
use Winnie\LaraDebut\MemCalculator;

/**
 * MemCalculatorTest
 * @group demo2
 */
class MemCalculatorTest extends TestCase
{
    /** @test */
    public function sum_ByDefault_ReturnsZero()
    {
        $calc = new MemCalculator();
        $lastSum = $calc->sum();
        $this->assertEquals(0, $lastSum);
    }

}

