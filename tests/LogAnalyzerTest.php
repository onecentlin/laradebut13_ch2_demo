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

    /** @test */
    public function isValidLogFileName_GoodExtensionLowercase_ReturnTrue()
    {
        $analyzer = new LogAnalyzer();
        $result = $analyzer->isValidLogFileName("filewithgoodxtension.slf");
        $this->assertTrue($result);
    }

    /** @test */
    public function isValidLogFileName_GoodExtensionUppercase_ReturnTrue()
    {
        $analyzer = new LogAnalyzer();
        $result = $analyzer->isValidLogFileName("filewithgoodxtension.SLF");
        $this->assertTrue($result);
    }
}
