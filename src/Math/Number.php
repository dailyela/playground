<?php

declare(strict_types=1);

namespace Playground\Math;

use LogicException;

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

    /**
     * Determines the divisors of the specified number.
     *
     * @return list<int> Divisors
     */
    public function divisors(): array
    {
       $divisors = [];

        if ($this->number <= 1) {
            throw new LogicException('The number must be greater than 1.');
        }

        for ($i = 1; $i <= $this->number; $i++)
        {
            if ($this->number % $i === 0) {
                $divisors[] = $i;
            }
        }

        return $divisors;
    }
}
