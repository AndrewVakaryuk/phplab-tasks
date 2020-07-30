<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     *@dataProvider positiveDataProvider
     */
    public function testReturnHelloWithArgument($input, $expected)
    {
        $this->assertEquals($expected, sayHelloArgument($input));
        //with string
        //$this->assertEquals('Hello world', sayHelloArgument('world'));
        //with boolean
        //$this->assertEquals('Hello 1', sayHelloArgument(3>2));
        //with boolean
        //$this->assertEquals('Hello ', sayHelloArgument(3<2));
        //with number
        //$this->assertEquals('Hello 5555', sayHelloArgument(5555));
    }
    public function positiveDataProvider()
    {
        return [
            ['world', 'Hello world'],
            [3>2, 'Hello 1'],
            [3<2, 'Hello '],
            [5555, 'Hello 5555'],
        ];
    }
}
