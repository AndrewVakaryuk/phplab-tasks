<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    public function testSayHelloExceptionNull(){
        $this->expectException(InvalidArgumentException::class);
        sayHelloArgumentWrapper(null);
    }
    public function testSayHelloExceptionArray(){
        $this->expectException(InvalidArgumentException::class);
        sayHelloArgumentWrapper([1, 1]);
    }
}