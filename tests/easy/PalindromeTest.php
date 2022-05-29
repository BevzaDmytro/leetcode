<?php


use Easy\Palindrome;
use PHPUnit\Framework\TestCase;

/**
 * Class PalindromeTest
 */
class PalindromeTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testIsPalindrome($expected, $actual)
    {
        $this->assertEquals($expected, Palindrome::isPalindrome($actual));
        $this->assertEquals($expected, Palindrome::isPalindromeMath($actual));
    }

    public function dataProvider(): array
    {
        return [
            [true, 121],
            [false, 123],
            [true, 1],
            [false, -1],
            [true, 12344321]
        ];
    }
}