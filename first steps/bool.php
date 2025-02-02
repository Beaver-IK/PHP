<?php

$number = 10;

var_dump($number > 10);   // false
var_dump($number < 10);   // false
var_dump($number <= 10);  // true
var_dump($number >= 10);  // true
var_dump($number == 10);  // true
var_dump($number != 10);  // false

var_dump($number === 10); // true
var_dump($number !== 10); // false

var_dump(value: $number <=> 10); // 0
var_dump(value: $number <=> 5); // 1
var_dump(value: $number <=> 15); // -1

?>