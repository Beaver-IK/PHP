<?php
// Гаражи
$garages = [
    1 => ['id' => 1, 'name' => 'Гараж на улице 1', 'size' => 1],
    7 => ['id' => 7, 'name' => 'Подземная парковка', 'size' => 100],
    23 => ['id' => 23, 'name' => 'У домика в деревне', 'size' => 2],
];

// Машины
$cars = [
    ['name' => 'Белый Ford', 'garageId' => 7],
    ['name' => 'Черный Уаз', 'garageId' => 1],
    ['name' => 'Синий Таз', 'garageId' => 7],
];

foreach ($cars as $car) {
    $garageId = $car['garageId'];
    $garage = $garages[$garageId];
    echo 'Машина "' . $car['name'] . '" стоит в "' . $garage['name'] . '"' . PHP_EOL;
}