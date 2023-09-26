<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($numbers) {
    $odd_numbers = [];
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            array_push($odd_numbers, $number);
        }
    }
    return $odd_numbers;
}

$odd_numbers = removeEvenNumbers($numbers);
print_r($odd_numbers);