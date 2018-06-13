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

    /** @test */
    public function add_WhenCalled_ChangesSum()
    {
        $calc = new MemCalculator();
        $calc->add(1);
        $lastSum = $calc->sum();
        $this->assertEquals(1, $lastSum);
    }
}

