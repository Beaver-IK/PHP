<?php
// ternary_conditions.php //
$orderPrice = rand(1950, 2050);
echo "Стоимость заказа: $orderPrice" . PHP_EOL;

//if ($orderPrice >= 2000) {
//    $deliveryPrice = 0;
//} else {
//    $deliveryPrice = 300;
//}

$deliveryPrice = $orderPrice >= 2000 ? 0 : 300;
$sumPrice = $orderPrice + $deliveryPrice;
echo "Стоимость доставки: $deliveryPrice. Общая стоимость: $sumPrice" . PHP_EOL;
// Стоимость заказа: 2024
// Стоимость доставки: 0. Общая стоимость: 2024

// ternary_conditions.php //
$userName = '';
$displayName = $userName ?: 'Имя не указано';
// Тоже самое, что: $displayName = $userName ? $userName : 'Имя не указано';
echo $displayName . PHP_EOL;
// Имя не указано

// ternary_conditions.php //
$value = $undefinedVariable ?? 'Значение не определено';
// Тоже самое, что: $value = isset($undefinedVariable) ? $undefinedVariable : 'Имя не указано';
echo $value . PHP_EOL;
// Значение не определено