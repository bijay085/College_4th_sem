<!-- 2. Write PHP Script to demonstrate use of different data types in PHP. -->

<?php
// Integer
$integerVar = 10;
echo "Integer: $integerVar<br>";

// Float (Floating point number)
$floatVar = 3.14;
echo "Float: $floatVar<br>";

// String
$stringVar = "Hello, world!";
echo "String: $stringVar<br>";

// Boolean
$boolVar = true;
echo "Boolean: $boolVar<br>";

// Array
$arrayVar = array(1, 2, 3, "four", true);
echo "Array: ";
print_r($arrayVar);
echo "<br>";

// Associative Array
$assocArrayVar = array("name" => "John", "age" => 30, "city" => "New York");
echo "Associative Array: ";
print_r($assocArrayVar);
echo "<br>";

// Null
$nullVar = null;
echo "Null: $nullVar<br>";

// Object
class MyClass {
    public $name = "Alice";
    public $age = 25;
}

$objectVar = new MyClass();
echo "Object: ";
var_dump($objectVar);
?>
