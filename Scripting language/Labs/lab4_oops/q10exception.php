<?php
// Function to divide two numbers and handle division by zero exception
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

// Try block to catch exceptions
try {
    // Test the divide function
    $result = divide(10, 2); // This should be fine
    echo "Result: " . $result . "\n";
    
    $result = divide(10, 0); // This will throw an exception
    echo "Result: " . $result . "\n"; // This line won't be executed
} catch (Exception $e) {
    // Catch the exception and display the error message
    echo "Caught exception: " . $e->getMessage() . "\n";
}
?>
