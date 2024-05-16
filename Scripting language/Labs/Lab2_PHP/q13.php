<?php
// Define an array of fruits
$fruits = array("Apple", "Banana", "Cherry", "Date");

// Using foreach loop to iterate over the array
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}

// Associative array
$person = array("Name" => "Bijay", "Age" => 20, "Occupation" => "Student");

// Using foreach loop with associative array
echo "<br>Person Details:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

