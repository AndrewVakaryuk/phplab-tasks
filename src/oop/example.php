<?php
//require "../../vendor/autoload.php";
//Чому скрипт виконується два рази при такому розміщенні автолоудера?
use src\oop\Calculator;
use src\oop\Commands\SubCommand;
use src\oop\Commands\SumCommand;
use src\oop\Commands\MultiCommand;
use src\oop\Commands\DivCommand;
use src\oop\Commands\ExpoCommand;

$calc = new Calculator();
$calc->addCommand('+', new SumCommand());
$calc->addCommand('-', new SubCommand());
$calc->addCommand('*', new MultiCommand());
$calc->addCommand('/', new DivCommand());
$calc->addCommand('**', new ExpoCommand());

// You can use any operation for computing
// will output 2
echo $calc->init(1)
    ->compute('+', 1)
    ->getResult();

echo PHP_EOL;

// Multiply operations
// will output 10
echo $calc->init(15)
    ->compute('+', 5)
    ->compute('-', 10)
    ->getResult();

echo PHP_EOL;

// TODO implement replay method
// should output 4
echo $calc->init(1)
    ->compute('+', 1)
    ->replay()
    ->replay()
    ->getResult();

echo PHP_EOL;

// TODO implement undo method
// should output 1
echo $calc->init(1)
    ->compute('+', 5)
    ->compute('+', 5)
    ->undo()
    ->undo()
    ->getResult();

echo PHP_EOL;

// should output 30
echo $calc->init(1)
    ->compute('+', 4)
    ->compute('+', 5)
    ->compute('*', 3)
    ->getResult();

echo PHP_EOL;

// should output 5
echo $calc->init(1)
    ->compute('+', 11)
    ->compute('-', 2)
    ->compute('/', 2)
    ->getResult();

echo PHP_EOL;

// should output 25
echo $calc->init(1)
    ->compute('+', 11)
    ->compute('-', 2)
    ->compute('/', 2)
    ->compute('**', 2)
    ->getResult();

echo PHP_EOL;