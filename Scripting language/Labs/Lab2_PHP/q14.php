<?php
// Define the range
$start = 11;
$end = 20;

// Array to store unique random numbers
$uniqueNumbers = array();

// Generate unique random numbers within the range
while (count($uniqueNumbers) < ($end - $start + 1)) {
    $randomNumber = mt_rand($start, $end); // Generate a random number within the range
    if (!in_array($randomNumber, $uniqueNumbers)) {
        $uniqueNumbers[] = $randomNumber; // Add unique random number to the array
    }
}

// Output the unique random numbers
echo "Sample Output: (" . implode(" ", $uniqueNumbers) . ")";
