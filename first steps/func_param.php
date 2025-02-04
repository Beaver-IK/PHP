<?php
// function_parameters.php

function showIntegers($maxNumber, $step)
{
    $number = 0;
    
    while ($number < $maxNumber) {
        echo "$number ";
        $number += $step;
    }
}

showIntegers(3, 1);
// 0 1 2 

showIntegers(10, 3);
// 0 3 6 9
?>

<?php
// function_many_parameters.php

function sumOnlyBiggerNumbers($minValue = 0, ...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number < $minValue) {
            continue;
        }
        
        $sum += $number;
    }
    
    echo $sum . PHP_EOL;
}

sumOnlyBiggerNumbers(); // 0
sumOnlyBiggerNumbers(3, 1, 2, 3, 4); // 7
sumOnlyBiggerNumbers(1, 1, 2, 3, 4, 5, 6); // 21
?>

<?php
// function_link_parameter.php

function increaseValue(&$value)
{
    $value += 2;
}

$number = 3;

echo $number . PHP_EOL; // 3

increaseValue($number);
echo $number . PHP_EOL; // 5
?>

<?php
// recursion.php

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
function fib($n)
{
    if ($n <= 1) {
        return $n;
    }

    return fib($n - 1) + fib($n - 2);
}

echo fib(8) . PHP_EOL; // 21
?>
