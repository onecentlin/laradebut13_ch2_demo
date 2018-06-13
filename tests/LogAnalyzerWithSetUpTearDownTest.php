<?php
use PHPUnit\Framework\TestCase;
use Winnie\LaraDebut\LogAnalyzer;

/**
 * LogAnalyzerTest
 * @group fixture
 */
class LogAnalyzerWithSetUpTearDownTest extends TestCase
{
    private $analyzer = null;

    public function setUp()
    {
        $this->analyzer = new LogAnalyzer();
    }

    /** @test */
    public function isValidLogFileName_GoodExtensionLowercase_ReturnTrue()
    {
        $result = $this->analyzer->isValidLogFileName("filewithgoodxtension.slf");
        $this->assertTrue($result);
    }

    /** @test */
    public function isValidLogFileName_GoodExtensionUppercase_ReturnTrue()
    {
        $result = $this->analyzer->isValidLogFileName("filewithgoodxtension.SLF");
        $this->assertTrue($result);
    }

    public function tearDown()
    {
        $this->analyzer = null;
    }
}
