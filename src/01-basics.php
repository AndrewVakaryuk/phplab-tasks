<?php
/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater then 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute)
{
    if($minute >= 60 or $minute < 0){
        throw new InvalidArgumentException('The value should be from 0 to 59 included. You entered ' . $minute);
    }else if($minute > 0 and $minute <= 15){
        $result = 'first';
    }else if($minute > 15 and $minute <=30){
        $result = 'second';
    }else if($minute > 30 and $minute <=45){
        $result = 'third';
    }else{
        $result = 'fourth';
    }

    return $result;
}
    //echo getMinuteQuarter(59);

/**
 * The $year variable contains a year (i.e. 1995 or 2020 etc).
 * Return true if the year is Leap or false otherwise.
 * Throw InvalidArgumentException if $year is lower then 1900.
 * @see https://en.wikipedia.org/wiki/Leap_year
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $year
 * @return boolean
 * @throws InvalidArgumentException
 */
function isLeapYear(int $year){
    if ($year < 1900){
        throw new InvalidArgumentException('Expected value is above 1900. Your input is'  . $year);
    }
    return ($year%4 == 0 and $year%100 !== 0 or $year%400 == 0);
}
    //echo isLeapYear(2016)
/**
 * The $input variable contains a string of six digits (like '123456' or '385934').
 * Return true if the sum of the first three digits is equal with the sum of last three ones
 * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
 * Throw InvalidArgumentException if $input contains more then 6 digits.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  string  $input
 * @return boolean
 * @throws InvalidArgumentException
 */
function isSumEqual(string $input){
        if(strlen($input) !== 6){
            throw new invalidArgumentException('You should write 6 digits. Your input is ' . $input);
        } else {
            return(($input[0] + $input[1] + $input[2]) == ($input[3] + $input[4] + $input[5]));
        }
    }
    //echo isSumEqual(123330);