<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @param $input
     * @param $expectedException
     * @dataProvider provideDataForExceptions
     */
    public function testSayHelloExceptions($input, $expectedException)
    {
        $this->expectException($expectedException);
        sayHelloArgumentWrapper($input);
    }
    public function provideDataForExceptions()
    {
        return [
        [null, InvalidArgumentException::class],
        [[1, 1], InvalidArgumentException::class]
        ];
    }
}