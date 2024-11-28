<?php

declare(strict_types=1);

namespace Tests\Math;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use Playground\Math\Number;

#[CoversClass(Number::class)]
final class NumberTest extends TestCase
{
    #[TestWith([2])]
    #[TestWith([-10])]
    #[TestWith([42])]
    public function testEvenNumbers(int $number): void
    {
        self::assertSame('Even', new Number($number)->isEvenOrOdd());
    }

    #[TestWith([3])]
    #[TestWith([-21])]
    #[TestWith([99])]
    public function testOddNumbers(int $number): void
    {
        self::assertSame('Odd', new Number($number)->isEvenOrOdd());
    }

    #[TestWith([7])]
    #[TestWith([89])]
    #[TestWith([593])]
    public function testPrimeNumbers(int $number): void
    {
        self::assertTrue(new Number($number)->isPrime());
    }

    #[TestWith([1])]
    #[TestWith([12])]
    #[TestWith([78])]
    public function testNotPrimeNumbers(int $number): void
    {
        self::assertFalse(new Number($number)->isPrime());
    }

    /**
     * @param int $number Number to get divisors from
     * @param list<int> $divisors List of divisors
     */
    #[TestWith([20, [1, 2, 4, 5, 10, 20]])]
    #[TestWith([50, [1, 2, 5, 10, 25, 50]])]
    #[TestWith([100, [1, 2, 4, 5, 10, 20, 25, 50, 100]])]
    #[TestWith([7, [1, 7]])]
    public function testGetDivisors(int $number, array $divisors): void
    {
        self::assertSame($divisors, new Number($number)->divisors());
    }
}
