<?php


use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    /**
     * @param $expected
     * @param mixed ...$input
     * @dataProvider provideDataForCountArgument
     */
    public function testCountArguments(array $input, $expected)
    {
        $this->assertEquals($expected, countArguments(...$input));
    }
    public function provideDataForCountArgument()
    {
        return [
            [['string'], ['argument_count' => 1, 'argument_values' => [0 => 'string']]],
            [[], ['argument_count' => 0, 'argument_values' => []]],
            [['a', 's', 'd'],['argument_count' => 3, 'argument_values' => [0 => 'a', 1 => 's', 2 => 'd']]]
        ];
    }
}
