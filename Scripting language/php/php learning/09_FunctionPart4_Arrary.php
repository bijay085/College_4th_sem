<?php

// Function that takes an array as input
function calculateSum($number) {
    $sum = array_sum($number);
    return $sum;
}

// Example usage
$myArray = [1, 2, 3, 4, 5];
$result = calculateSum($myArray);

echo $result; // Output: 15

?>
