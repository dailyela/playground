<?php

declare(strict_types=1);

namespace Tests\Math;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use Playground\Math\Number;

#[CoversClass(Number::class)]
class NumberTest extends TestCase
{
    #[TestWith([2])]
    #[TestWith([-10])]
    #[TestWith([42])]
    public function testEvenNumbers(int $number): void
    {
        self::assertSame('Even', new Number()->isEvenOrOdd($number));
    }

    #[TestWith([3])]
    #[TestWith([-21])]
    #[TestWith([99])]
    public function testOddNumbers(int $number): void
    {
        self::assertSame('Odd', new Number()->isEvenOrOdd($number));
    }
}
