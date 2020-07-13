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
    $input = ucwords(str_replace( '_', ' ', $input));
    $input = str_replace( ' ', '', $input);
    return lcfirst($input);
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
    $len_arr = count($array_input);
    for ($i = 0; $i < $len_arr; $i++){
        $length_word = iconv_strlen($array_input[$i]);
        for ($j = ($length_word - 1); $j >= 0; $j--){
            echo $array_input[$i][$j];
        }
        echo ' ';
    }
}

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