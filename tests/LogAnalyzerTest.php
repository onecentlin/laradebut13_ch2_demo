<?php
use PHPUnit\Framework\TestCase;
use Winnie\LaraDebut\LogAnalyzer;

/**
 * LogAnalyzerTest
 * @group ch2
 */
class LogAnalyzerTest extends TestCase
{
    /** @test */
    public function isValidFileName_BadExtension_ReturnsFalse()
    {
        $analyzer = new LogAnalyzer();
        $result = $analyzer->isValidLogFileName("filewithbadextension.foo");
        $this->assertFalse($result);
    }

}
