<?php
/**
 * Created by PhpStorm.
 * User: yoshiki
 * Date: 2019-01-20
 * Time: 10:04
 */

// 高階関数
function my_array_walk(array $array,callable $func) {
  foreach ($array as $key => $value) {
    $func($value,$key);
  }
}

function showItem($value,$key) {
  print "{$key} : {$value}<br />";
}

$data =['杉山','長田','杉沼','和田','土井'];
my_array_walk($data,'showItem');
