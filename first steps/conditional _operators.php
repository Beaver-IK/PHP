<?php
// conditions.php

$keyPressedCode = rand(37, 40);

echo "Код символа $keyPressedCode" . PHP_EOL;

// Пример неудачного кода
if ($keyPressedCode === 37) {
    echo 'Двигаемся влево' . PHP_EOL;
} else {
    if ($keyPressedCode === 38) {
        echo 'Двигаемся вверх' . PHP_EOL;
    } else {
        if ($keyPressedCode === 39) {
            echo 'Двигаемся вправо' . PHP_EOL;
        } else {
            echo 'Двигаемся вниз' . PHP_EOL;
        }
    }
}



if ($keyPressedCode === 37) {
    echo 'Двигаемся влево' . PHP_EOL;
} elseif ($keyPressedCode === 38) {
    echo 'Двигаемся вверх' . PHP_EOL;
} elseif ($keyPressedCode === 39) {
    echo 'Двигаемся вправо' . PHP_EOL;
} elseif ($keyPressedCode === 40) {
    echo 'Двигаемся вниз' . PHP_EOL;
}
// Код символа 37
// Двигаемся влево
// ...или...
// Код символа 38
// Двигаемся вверх
// ...или...
// Код символа 39
// Двигаемся вправо
// ...или...
// Код символа 40
// Двигаемся вниз