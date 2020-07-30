<?php


use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    public function testCountArgumentsExceptionIfNumber()
    {
    $this->expectException(InvalidArgumentException::class);
    countArgumentsWrapper('s', 1);
    }
    public function testCountArgumentsExceptionIfArray()
    {
        $this->expectException(InvalidArgumentException::class);
        countArgumentsWrapper('s', [1, 2]);
    }
}
