<?php
// Инициализация массива такси
$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000),
     'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000),
     'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000),
     'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000),
     'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000),
     'isFree' => (bool) rand(0, 1)],
];


$passenger = rand(0, 1000);


$nearestCar = null;
$minDistance = INF;

foreach ($cars as $car) {
    $distance = abs($car['position'] - $passenger);

    if ($car['isFree'] && $distance < $minDistance) {
        $minDistance = $distance;
        $nearestCar = $car;
    }
}

foreach ($cars as $car) {
    $distance = abs($car['position'] - $passenger);
    $status = $car['isFree'] ? 'свободен' : 'занят';
    $info = '';

    if ($nearestCar && $car['name'] === $nearestCar['name']) {
        $info = ' - едет это такси';
    }

    echo '"' . $car['name'] . '", стоит на ' . 
         $car['position'] . ' км, до пассажира ' . 
         $distance . ' км (' . $status . ')' . $info . PHP_EOL;
}