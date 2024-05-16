<!-- Write php to demnstrate php operators -->

<?php
// Arithmetic Operators
$a = 10;
$b = 5;
$sum = $a + $b;
$diff = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$remainder = $a % $b;

echo "Arithmetic Operators:<br>";
echo "Sum: $sum<br>";
echo "Difference: $diff<br>";
echo "Product: $product<br>";
echo "Quotient: $quotient<br>";
echo "Remainder: $remainder<br><br>";

// Assignment Operators
$x = 15;
$y = 20;

echo "Assignment Operators:<br>";
echo "Initial x: $x<br>";
echo "Initial y: $y<br>";

$x += 5; // Equivalent to: $x = $x + 5;
$y -= 10; // Equivalent to: $y = $y - 10;

echo "Updated x: $x<br>";
echo "Updated y: $y<br><br>";

// Comparison Operators
$num1 = 25;
$num2 = 30;

echo "Comparison Operators:<br>";
echo "$num1 == $num2: " . ($num1 == $num2) . "<br>"; // Equal
echo "$num1 != $num2: " . ($num1 != $num2) . "<br>"; // Not equal
echo "$num1 > $num2: " . ($num1 > $num2) . "<br>"; // Greater than
echo "$num1 < $num2: " . ($num1 < $num2) . "<br>"; // Less than
echo "$num1 >= $num2: " . ($num1 >= $num2) . "<br>"; // Greater than or equal
echo "$num1 <= $num2: " . ($num1 <= $num2) . "<br><br>"; // Less than or equal

// Logical Operators
$bool1 = true;
$bool2 = false;

echo "Logical Operators:<br>";
echo "$bool1 && $bool2: " . ($bool1 && $bool2) . "<br>"; // Logical AND
echo "$bool1 || $bool2: " . ($bool1 || $bool2) . "<br>"; // Logical OR
echo "!$bool1: " . (!$bool1) . "<br><br>"; // Logical NOT

// String Concatenation Operator
$str1 = "Hello";
$str2 = "World";

echo "String Concatenation Operator:<br>";
echo $str1 . " " . $str2 . "<br>"; // Concatenation using .
?>
