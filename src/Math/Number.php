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
}
