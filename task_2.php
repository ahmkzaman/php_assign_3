<?php
//Task 2: Array Manipulation
function removeEvenNumbers($numbers)
{
    $newNumbers = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $newNumbers[] = $number;
            echo $number . "\n";
        }
    }
}

$numbers = range(1, 10);

removeEvenNumbers($numbers);
