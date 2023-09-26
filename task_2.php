<?php
// Task 2: Array Manipulation

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function removeEvenNumber($numbers)
{
    $newNumbers = [];
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            array_push($newNumbers, $number);
        }
    }
    return $newNumbers;
}

$result = removeEvenNumber($numbers);
print_r($result);
?>