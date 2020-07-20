<?php
/**
 * The $input variable contains text in snake case (i.e. hello_world or this_is_home_task)
 * Transform it into camel cased string and return (i.e. helloWorld or thisIsHomeTask)
 * @see http://xahlee.info/comp/camelCase_vs_snake_case.html
 *
 * @param  string  $input
 * @return string
 */
function snakeCaseToCamelCase(string $input){
    return lcfirst(str_replace( ' ', '', ucwords(str_replace( '_', ' ', $input))));
}
    //echo snakeCaseToCamelCase('hello_world');
/**
 * The $input variable contains multibyte text like 'ФЫВА олдж'
 * Mirror each word individually and return transformed text (i.e. 'АВЫФ ждло')
 * !!! do not change words order
 *
 * @param  string  $input
 * @return string
 */
function mirrorMultibyteString(string $input){
    $array_input = explode(' ', $input);
    foreach ($array_input as &$value){
        $encoding = mb_detect_encoding($value);
        $length   = mb_strlen($value, $encoding);
        $reversed = '';
        while ($length-- > 0) {
            $reversed .= mb_substr($value, $length, 1, $encoding);
        }
        $value = $reversed;
        unset($value);
    }
    return implode(' ', $array_input);
}
/** I tried to solve the task by myself, but it didn't work for cyrillic characters,
 *  so I googled it and found solution on https://kvz.io/reverse-a-multibyte-string-in-php.html
 */

/**
 * My friend wants a new band name for her band.
 * She likes bands that use the formula: 'The' + a noun with first letter capitalized.
 * However, when a noun STARTS and ENDS with the same letter,
 * she likes to repeat the noun twice and connect them together with the first and last letter,
 * combined into one word like so (WITHOUT a 'The' in front):
 * dolphin -> The Dolphin
 * alaska -> Alaskalaska
 * europe -> Europeurope
 * Implement this logic.
 *
 * @param  string  $noun
 * @return string
 */
function getBrandName(string $noun){
    if ($noun[0] === $noun[strlen($noun) -1]){
        $noun_1 = ucfirst(rtrim($noun, $noun[strlen($noun) -1]));
        $noun_repeat = lcfirst($noun);
        return ($noun_1 . $noun_repeat);
    } else{
        return ('The '.ucfirst($noun));
    }
}