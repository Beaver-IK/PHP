<?php
// break.php

$numbers = [1, 2, 3, 4, 5];
$maxValue = 2;

foreach ($numbers as $number) {
    if ($number > $maxValue) {
        echo "Достигнут предел $maxValue. Цикл завершен" . PHP_EOL;
        break;
    }
    
    echo "Число $number подходит" . PHP_EOL;
}

// Число 1 подходит
// Число 2 подходит
// Достигнут предел 2. Цикл завершен

$matrix = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
];

$needNumber = 9;

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if ($matrix[$i][$j] === $needNumber) {
            echo "Искомое число $needNumber в матрице находится на позиции: $i:$j" . PHP_EOL;
            break(2);
        }
    }
}
// Искомое число 9 в матрице находится на позиции: 1:3
?>

<?php
// continue.php

$products = [
    [
        'name' => 'Кружка',
        'price' => 120,
        'category' => 2,
    ],
    [
        'name' => 'Тетрис',
        'price' => 250,
        'category' => 1,
    ],
    [
        'name' => 'Плюшевый медведь',
        'price' => 100,
        'category' => 1,
    ],
];

$money = 150;
echo "Денег у клиента: $money" . PHP_EOL;

foreach ($products as $product) {
    if ($product['price'] > $money) {
        continue;
    }

    echo $product['name'] . ' за ' . $product['price'] . PHP_EOL;
}
// Денег у клиента: 150
// Кружка за 120
// Плюшевый медведь за 100


// Решение без оператора continue
foreach ($products as $product) {
    if ($product['price'] <= $money) {
        echo $product['name'] . ' за ' . $product['price'] . PHP_EOL;
    }
}
?>