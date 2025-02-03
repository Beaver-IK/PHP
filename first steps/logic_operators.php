<?php
// boolean_logic.php
// Логическое И (&&) / конъюнкция
$orderPrice = 1000;
$byCourier = true;
$deliveryPrice = 0;
if ($orderPrice < 3000 && $byCourier) {
    $deliveryPrice = 300;
}
$sumPrice = $deliveryPrice + $orderPrice;
echo "Общая стоимость заказа: $sumPrice" . PHP_EOL;
// Общая стоимость заказа: 1300
// но
// $byCourier = false;
// Общая стоимость заказа: 1000

// boolean_logic.php
// Логическое ИЛИ (&&) / дизъюнкция
$passEnteringExam = true;
$passPreviousCourse = false;
if ($passEnteringExam || $passPreviousCourse) {
    echo 'Вы можете приступить к следующему учебному курсу' . PHP_EOL;
}
// Вы можете приступить к следующему учебному курсу

// boolean_logic.php
// Исключающее ИЛИ (xor)
$user1InChat = true;
$user2InChat = false;
$canInvite = $user1InChat xor $user2InChat;
// $canInvite = true