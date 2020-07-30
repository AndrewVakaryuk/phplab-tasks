<?php


use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    public function testReturnHello()
    {
        $this->assertEquals('Hello', sayHello());
    }
}
