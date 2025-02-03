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
unset($petTypes[2]); // удаление элемента массива
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

<?php
// associative_arrays.php

$car = [
    'name' => 'Грузовик',
    'engine' => 'Дизель',
    'year' => 2022,
];

echo "Дата выпуска: {$car['year']}" . PHP_EOL;
// 2022

$car['color'] = 'Зеленый';
var_dump($car);
//array(4) {
//    'name' =>
//    string(16) "Грузовик"
//    'engine' =>
//    string(12) "Дизель"
//    'year' =>
//    int(2022)
//    'color' =>
//    string(14) "Зеленый"
//}

unset($car['color']); // удаление поля из массива
?>

<?php
// multidimensional_arrays.php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

var_dump($matrix[2]);
//array(3) {
//    [0] =>
//    int(7)
//    [1] =>
//    int(8)
//    [2] =>
//    int(9)
//}

echo $matrix[1][0] . PHP_EOL; // 4
echo $matrix[0][0] . PHP_EOL; // 1
?>

<?php
// data_in_arrays.php

$bear = [
    'name' => 'Плюшевый медведь',
    'price' => 100,
    'category' => 'Игрушки',
];
?>

<?php
// data_in_arrays.php

$products = [
    [
        'name' => 'Тетрис',
        'price' => 250,
        'category' => 'Игрушки',
    ],
    [
        'name' => 'Кружка',
        'price' => 120,
        'category' => 'Посуда',
    ],
];
?>

<?php
// catalog.php

$catalog = [
    'categories' => [
        1 => [
            'id' => 1,
            'name' => 'Игрушки',
            'room' => 'Детская',
        ],
        2 => [
            'id' => 2,
            'name' => 'Посуда',
            'room' => 'Кухня',
        ],
    ],
    'products' => [
        [
            'name' => 'Тетрис',
            'price' => 250,
            'category' => 1,
        ],
        [
            'name' => 'Кружка',
            'price' => 120,
            'category' => 2,
        ],
        [
            'name' => 'Плюшевый медведь',
            'price' => 100,
            'category' => 1,
        ],
    ]
];

$product = $catalog['products'][2];
$productCategory = $catalog['categories'][$product['category']];

echo "Товар: {$product['name']}. Цена: {$product['price']}. Категория: {$productCategory['name']}. Подходит для комнаты: {$productCategory['room']}." . PHP_EOL;
// Товар: Плюшевый медведь. Цена: 100. Категория: Игрушки. Подходит для комнаты: Детская.
?>