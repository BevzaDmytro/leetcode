<?php
declare(strict_types=1);

namespace Easy;

use JetBrains\PhpStorm\Pure;

/**
 * Class Palindrome
 *
 * @see https://leetcode.com/problems/palindrome-number/
 */
final class Palindrome
{
    /**
     * @param int $x
     * @return bool
     */
    #[Pure] public static function isPalindrome(int $x): bool
    {
        $str = str_split((string)$x);
        $len = count($str);
        for($i = 0; $i <= $len/2; $i++) {
            if($str[$i] !== $str[$len - 1 - $i]) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param int $x
     * @return bool
     */
    public static function isPalindromeMath(int $x): bool
    {
        if($x < 0 || $x % 10 === 0) {
            return false;
        }

        $revertedNumber = 0;

        while ($x > $revertedNumber) {
            $revertedNumber = $revertedNumber * 10 + $x % 10;
            $x = (int)($x / 10);
        }

        return $x === $revertedNumber || $x === (int)($revertedNumber / 10);
    }
}