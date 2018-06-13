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

    // 2.5 使用參數來重構測試
    /**
     * @test
     * @param      file
     * @testWith   ["filewithgoodextension.SLF"]
     */
    public function isValidLogFileName_ValidExtensions_ReturnsTrue($file)
    {
        $analyzer = new LogAnalyzer();
        $result = $analyzer->isValidLogFileName($file);
        $this->assertTrue($result);
    }

    /**
     * @test
     * @dataProvider  provideFileData
     */
    public function isValidLogFileName_VariousExtensions_ChecksThem($file, $expected)
    {
        $analyzer = new LogAnalyzer();
        $result = $analyzer->isValidLogFileName($file);
        $this->assertEquals($expected, $result);
    }

    public function provideFileData()
    {
        return [
            ["filewithgoodextension.SLF", true],
            ["filewithgoodextension.slf", true],
            ["filewithbadextension.foo", false]
        ];
    }
}
