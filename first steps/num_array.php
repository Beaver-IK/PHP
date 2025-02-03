<?php
// simple_arrays.php

// Объявление массивов
$emptyArray = [];
// $emptyArray = array(); устаревший способ

$petTypes = ['кот', 'собака', 'рыбка'];
var_dump($petTypes);
//array(3) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [2] =>
//    string(10) "рыбка"
//}

// Получение данных из массива
echo $petTypes[1] . PHP_EOL; // собака
?>

<?php
// simple_arrays.php

$petTypes = ['кот', 'собака', 'рыбка'];

// Получение данных из массива
echo $petTypes[1] . PHP_EOL; // собака

// Добавление элемента в конец массива
$petTypes[] = 'попугай';
var_dump($petTypes);
//array(4) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [2] =>
//    string(10) "рыбка"
//    [3] =>
//    string(14) "попугай"
//}

// Изменение значения элемента
$petTypes[2] = 'кролик';
echo $petTypes[2] . PHP_EOL; // кролик

// Удаление элемента из массива
unset($petTypes[2]);
var_dump($petTypes);
//array(3) {
//    [0] =>
//    string(6) "кот"
//    [1] =>
//    string(12) "собака"
//    [3] =>
//    string(14) "попугай"
//}
?>

<?php
// custom_index_arrays.php

$keyboardsKeys = [
    27 => 'Esc',
    13 => 'Enter',
    32 => 'Space',
];
$keyboardsKeys[] = 'newBottom';

var_dump($keyboardsKeys);
//array(3) {
//    [27] =>
//    string(3) "Esc"
//    [13] =>
//    string(5) "Enter"
//    [32] =>
//    string(5) "Space"
//    [33]=>
//    string(9) "newBottom"
//}

$keyPressed = 27;
echo $keyboardsKeys[$keyPressed] . PHP_EOL;
// Esc

echo PHP_EOL;

$otherKeysArray = [
    3 => 'first',
    'second',
    'third'
];
var_dump($otherKeysArray);
//array(3) {
//    [3] =>
//    string(5) "first"
//    [4] =>
//    string(6) "second"
//    [5] =>
//    string(5) "third"
//}
?>