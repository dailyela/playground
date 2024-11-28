<?php

declare(strict_types=1);

namespace Playground\Math;

final readonly class Number
{
    /**
     * Promotes properties.
     *
     * @param int $number
     */
    public function __construct(private int $number) {}

    /**
     * Checks if the given number is even or odd.
     *
     * @return string "Even" for eben numbers and "Odd" for odd numbers
     */
    public function isEvenOrOdd(): string
    {
        if ($this->number % 2 === 0) {
            return 'Even';
        }

        return 'Odd';
    }

    /**
     * Checks if the given number is a prime number.
     *
     * @return bool True if the number is a prime number, false otherwise
     */
    public function isPrime(): bool
    {
        if ($this->number === 1) {
            return false;
        }

        for ($i = 2; $i <= $this->number / 2; $i++) {
            if ($this->number % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
