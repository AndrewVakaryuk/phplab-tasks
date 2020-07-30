<?php


use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    public function testCountArgumentsString(){
        $this->assertEquals(['argument_count' => 1, 'argument_values' => [0 => 'string']], countArguments('string'));
    }
    public function testCountArgumentsEmptyString(){
        $this->assertEquals(['argument_count' => 1, 'argument_values' => [0=> '']], countArguments(''));
    }
    public function testCountArgumentsThreeArguments(){
        $this->assertEquals(['argument_count' => 3, 'argument_values' => [0 => 'a', 1 => 's', 2 => 'd']], countArguments('a', 's', 'd'));
    }
}

/** Don't know how to implement the test with dataProvider for multiple arguments
 *
 * @param $input
 * @param $expected
 * @dataProvider positiveDataProvider
 *
public function testCountArguments($input, $expected)
{
    $this->assertEquals($expected, countArguments($input));
}
public function positiveDataProvider(){
    return [
        ['string', ['argument_count' => 1, 'argument_values' => [0 => 'string']]],
        ['', ['argument_count' => 1, 'argument_values' => [0=> '']]],
    ];
}
*/
