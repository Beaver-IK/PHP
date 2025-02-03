<?php
// array_functions.php

// массив из предыдущего урока
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

var_dump(count($catalog['products'])); // 3

shuffle($catalog['categories']); // Перевешивание массива. Сбрасывает ключи.
var_dump($catalog['categories']);
?>

<?php
// search_in_arrays.php

// array_keys|array_values
var_dump(array_keys($catalog['categories'][1])); // ['id', 'name', 'room'];  Возвращает массив из ключей
var_dump(array_values($catalog['categories'][1])); // [1, 'Игрушки', 'Детская'];  Возвращает значения

echo PHP_EOL . PHP_EOL;

// in_array|array_search
var_dump(in_array(100, $catalog['products'][0])); // false   1) Что ищем 2) где ищем
var_dump(in_array('Кружка', $catalog['products'][1])); // true
var_dump(in_array('Кружка', $catalog['products'][2])); // false

var_dump(array_search(2, [1, 2, 3])); // 1  Ищет индекс вхождения
var_dump(array_search(20, [1, 2, 3])); // false

echo PHP_EOL . PHP_EOL;

// array_key_exists
var_dump(array_key_exists(0, $catalog)); // false  Проверка существования ключа
var_dump(array_key_exists('products', $catalog)); // true 


echo PHP_EOL . PHP_EOL;

// array_unique|array_map
$rooms = array_map(fn ($item) => $item['room'], $catalog['categories']); // Проход по массиву и применение функции для каждого элемента
var_dump($rooms); // [1 => 'Детская', 2 => 'Кухня', 3 => 'Кухня']
var_dump(array_unique($rooms)); // [1 => 'Детская', 2 => 'Кухня']  оставляет только уникальные значения
?>

<?php
// array_modifiers.php

$items = [
    'first',
    'second',
    'third',
];

// array_pop|array_shift|array_push|array_unshift

$lastElement = array_pop($items);
var_dump($items, $lastElement); // ['first', 'second'], 'third извлекает последний элемент

$firstElement = array_shift($items);
var_dump($items, $firstElement); // ['second'], 'first' извлекает перывый элемент

// Не используйте функцию array_push для добавления одного элемента, вместо нее лучше использовать оператор добавления элемента в массив
array_push($items, 'last', 'latest');  // Добавляет значения в конец списка
var_dump($items); // ['second', 'last', 'latest']

array_unshift($items, 'leader', 'after_leader');  // добавляет элементы в начало массива
var_dump($items); // ['leader', 'after_leader', 'second', 'last', 'latest']
?>

<?php
// sorts.php

$numbers = [1, 3, 8, 4, 6, 9, 0];

// sort|rsort
sort($numbers);
var_dump($numbers); // [0, 1, 3, 4, 6, 8, 9]

rsort($numbers);
var_dump($numbers); // [9, 8, 6, 4, 3, 1, 0]

echo PHP_EOL . PHP_EOL;

$numbersWithKeys = [
    'a' => 1,
    'b' => 3,
    'c' => 8,
    'd' => 4,
    'e' => 6,
    'f' => 9,
    'j' => 0,
];
asort($numbersWithKeys);
var_dump($numbersWithKeys); // Сохраняют ключи
// ['j' => 0, 'a' => 1, 'b' => 3, 'd' => 4, 'e' => 6, 'c' => 8, 'f' => 9]

arsort($numbersWithKeys);
var_dump($numbersWithKeys);
// ['f' => 9, 'c' => 8, 'e' => 6, 'd' => 4, 'b' => 3, 'a' => 1, 'j' => 0]

echo PHP_EOL . PHP_EOL;

$numbersWithKeys2 = [
    'a' => 1,
    'd' => 2,
    'f' => 3,
    'b' => 4,
    'e' => 5,
    'j' => 6,
    'c' => 7,
];
ksort($numbersWithKeys2);
var_dump($numbersWithKeys2);  // сортировака по ключам
// ['a' => 1, 'b' => 4, 'c' => 7, 'd' => 2, 'e' => 5, 'f' => 3, 'j' => 6]

krsort($numbersWithKeys2);
var_dump($numbersWithKeys2);
// ['j' => 6, 'f' => 3, 'e' => 5, 'd' => 2, 'c' => 7, 'b' => 4, 'a' => 1]
?>

<?php
// usort.php

// usort|uasort()
usort($catalog['products'], fn ($a, $b) => $a['price'] <=> $b['price']);
var_dump($catalog['products']);
?>