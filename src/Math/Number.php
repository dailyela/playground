<?php

declare(strict_types=1);

namespace Playground\Math;

class Number
{
    /**
     * Checks if the given number is even or odd.
     *
     * @param int $number Number to check
     *
     * @return string "Even" for eben numbers and "Odd" for odd numbers
     */
    public function isEvenOrOdd(int $number): string
    {
        if ($number % 2 === 0) {
            return 'Even';
        }

        return 'Odd';
    }
}
