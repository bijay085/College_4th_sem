<?php
// Single-line comment
# Another single-line comment

/*
Multi-line comment
This script demonstrates variable declaration and basic syntax.
*/

// Variable declaration
$name = "John Doe";
$age = 25;
$height = 175.5;
$isStudent = true;
$grades = array(85, 90, 78, 95); // Array variable

// Outputting variables
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height cm <br>";

// Conditional statement
if ($isStudent) {
    echo "Status: Student <br>";

} else {
    echo "Status: Not a student <br>";
}

// Looping through an array
echo "Grades: ";
foreach ($grades as $grade) {
    echo "$grade ";
}
echo "<br>";

// Arithmetic operations
$totalGrades = array_sum($grades);
$averageGrade = $totalGrades / count($grades);
echo "Total Grades: $totalGrades <br>";
echo "Average Grade: $averageGrade <br>";

// Function declaration
function greet($name) {
    echo "Hello, $name! <br>";
}

// Function call
greet("Alice");
greet("Bob");
