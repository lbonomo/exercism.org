<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $n1 = join($digitsOfNumber1);
        $n2 = join($digitsOfNumber2);
        return $n1 + $n2;
    }

    public function isPalindrome(int $number): bool
    {
        $a = $number;
        $b = strrev($number);
        if ($a == $b ) {
            return true;
        } else {
            return false;
        }
        throw new \BadFunctionCallException("Implement the function");
    }

    public function validate(string $input): string
    {
        if (strlen($input) == 0) {
            return 'Required field';
        } else {
            if ( 0 < intval($input) ) {
                return '';
            } else {
                return 'Must be a whole number larger than 0';
            }
        }
        throw new \BadFunctionCallException("Implement the function");
    }
}
