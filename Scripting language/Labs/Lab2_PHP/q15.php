<?php
// Sample array
$brand = array('A' => 'Apple', 'B' => 'Bird', 'C' => 'Carbon');

// Function to change all values to upper case
function changeToUpper($arr) {
    return array_map('strtoupper', $arr);
}

// Function to change all values to lower case
function changeToLower($arr) {
    return array_map('strtolower', $arr);
}

// Usage example
$upperCaseBrand = changeToUpper($brand);
$lowerCaseBrand = changeToLower($brand);

// Output the results
echo "Original Array:<br>";
print_r($brand);

echo "<br><br>Array with values in Upper Case:<br>";
print_r($upperCaseBrand);

echo "<br><br>Array with values in Lower Case:<br>";
print_r($lowerCaseBrand);
