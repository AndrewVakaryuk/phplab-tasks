<?php

/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param  array  $input
 * @return array
 */
function repeatArrayValues(array $input)
{
  $repeated_arr_val = [];
  foreach ($input as $value) {
    for ($i = $value; $i > 0; $i--) {
      $repeated_arr_val[] = $value;
    }
  }
  return $repeated_arr_val;
}

/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param  array  $input
 * @return int
 */
function getUniqueValue(array $input)
{
  $arr_inside_out = array_count_values($input);
  foreach ($arr_inside_out as $key => $value) {
    if ($value != 1) {
      unset($arr_inside_out[$key]);
    }
  }

  return (!count($arr_inside_out) ? 0 : min(array_keys($arr_inside_out)));
}

/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param  array  $input
 * @return array
 */
function groupByTag(array $input)
{
  //create an array, for values of 'tags' as elements(and array) that consist
  //corresponding values of 'name'.
  $arr_tags = [];
  //iterate through $input
  foreach ($input as $value) {
    //iterate through 'tags' as an array and add a value from 'name'
    //that corresponds to a value from "tags" array.
    foreach ($value['tags'] as $tag) {
      $arr_tags[$tag][] = $value['name'];
    }
  }
  //sort the array by key.
  ksort($arr_tags);
  //sort the values inside each element of $arr_tags.
  foreach ($arr_tags as &$value) {
    sort($value);
  }
  return $arr_tags;
}
