<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function emptyString()
    {
        $result = $this->stringCalculator->Add("");

        $this->assertEquals("0", $result);
    }

    /**
     * @test
     */
    public function oneNumber()
    {
        $result = $this->stringCalculator->Add("2");

        $this->assertEquals("2", $result);
    }

    /**
     * @test
     */
    public function threePlusTwoEqualFour()
    {
        $result = $this->stringCalculator->Add("3,2");

        $this->assertEquals("5", $result);
    }

    /**
     * @test
     */
    public function fiveNumbers()
    {
        $result = $this->stringCalculator->Add("1,2,3,4,5");

        $this->assertEquals("15", $result);
    }

    /**
     * @test
     */
    public function fiveNumbersWithBreak()
    {
        $result = $this->stringCalculator->Add("1\n2\n3\n4\n5");

        $this->assertEquals("15", $result);
    }

    /**
     * @test
     */
    public function breakAndComa()
    {
        $result = $this->stringCalculator->Add("1\n10,4");

        $this->assertEquals("15", $result);
    }

    /**
     * @test
     */
    public function changeDelimitation()
    {
        $result = $this->stringCalculator->Add("//+\n34+33+33");

        $this->assertEquals("100", $result);
    }

    /**
     * @test
     */
    public function changeDelimitationWithLongCharacters()
    {
        $result = $this->stringCalculator->Add("//add\n34 add 1 add 5");

        $this->assertEquals("40", $result);
    }
}
