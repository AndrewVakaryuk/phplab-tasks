<?php
/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param  array  $airports
 * @return string[]
 *
 */
function getUniqueFirstLetters(array $airports)
{
    $first_letters = [];
    foreach ($airports as $airport_arr) {
        $first_letters[] = substr($airport_arr['name'], 0, 1);
    }
    $unique_f_letters = array_unique($first_letters);
    sort($unique_f_letters);
    return $unique_f_letters;
}